@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crear Marca </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('marca.index')}}">Marcas</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')


 <section class="content">
      <div class="container-fluid">

        <form method="POST" action="{{ route('marca.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">

          <!-- left column -->
              <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                      <h3 class="card-title">Nueva Marca</h3>
                    </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                    <div class="card-body">


                  <div class="custom-file">

                          <label  for="imagen">Subir imagen</label>
                          <input type="file"  name="imagen" value="{{old('imagen')}}">
                          <div>
                              @error('imagen')
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>

                        <div class="form-group {{ $errors->has('name') ? 'text-danger' : '' }}">
                          <label for="name">Marca</label>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese la Categoria" value="{{old('name')}}">
                          {!! $errors->first('name','<span class="help-block">:message</span>') !!}

                        </div>

                        <div class="form-group ">
                            <label for="order">orden</label>
                            <input name="order" type="number" class="form-control" id="order" placeholder="Ingrese orden" value="{{old('order')}}">

                        </div>

                        <div class="col-md-8 mb-2 mr-4 flex">
                            <label class="text-danger">Estado</label>
                            <label >
                                <input
                                    type="radio"
                                    class="flex py-1 "
                                    name="state"
                                    value="1" />
                                Activado

                                <input
                                    type="radio"
                                    class="flex py-1 "
                                    name="state"
                                    value="0" />
                                Descativado
                            </label>
                            {{-- <input-error for="state" /> --}}

                        </div>



                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Guardar Categoria</button>
                    </div>

              </div>
              <!--/.col (left) -->
              <!-- right column -->

           </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
 </section>
<!--
  <div class="row">
    <div class="col-md-8">
           <div class="box">
              <div class="box-header">
                 <h3 class="box-title">Crear una Publicaci??n</h3>

              </div>
            </div>

            <form>
              <div class="box-body">
                  <div class="form-group">
                      <label>T??tulo de la Publicaci??n</label>
                      <input name="title" class="form-control" placeholder="Ingrese el t??tulo de la Publicaci??n">
                  </div>
              </div>

            </form>



    </div>
  </div>

-->

@stop

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
@endpush

@push('scripts')

  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script>
    //Timepicker
   // $('#timepicker').datetimepicker({
   //   format: 'LT'
   // })

    $('#datepicker').datepicker({
      autoclose: true
    })
</script>


<script>

    CKEDITOR.replace('editor')
    //bootstrap WYSIHTML5 - text editor
    $('.select2').select2()
</script>

@endpush


