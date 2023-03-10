@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crear Slider </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('sliders.index')}}">Sliders</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')


 <section class="content">
      <div class="container-fluid">

        <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">

          <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                      <h3 class="card-title">Nuevo Sliders</h3>
                    </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                    <div class="card-body">


                        <div class="form-group">
                            <p class="text-danger">* obligatorio subir imagen * 1920px  por 950px </p>
                          <label  for="image">Subir imagen</label>
                          <input type="file"  name="image" value="{{old('image')}}">

                          <div>
                              @error('image')
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                        </div>


                        <div class="form-group {{ $errors->has('title1') ? 'text-danger' : '' }}">
                          <label for="title1">T??tulo 1</label>
                          <input name="title1" type="text" class="form-control" id="title1" placeholder="Ingrese titulo1" value="{{old('title1')}}">
                          {!! $errors->first('title1','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('title2') ? 'text-danger' : '' }}">
                            <label for="title2">T??tulo 2</label>
                            <input name="title2" type="text" class="form-control" id="title2" placeholder="Ingrese titulo2" value="{{old('title2')}}">
                            {!! $errors->first('title2','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('title3') ? 'text-danger' : '' }}">
                            <label for="title3">T??tulo 3</label>
                            <input name="title3" type="text" class="form-control" id="title3" placeholder="Ingrese titulo3" value="{{old('title3')}}">
                            {!! $errors->first('title3','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('title4') ? 'text-danger' : '' }}">
                            <label for="title4">T??tulo 4</label>
                            <input name="title4" type="text" class="form-control" id="title4" placeholder="Ingrese titulo4" value="{{old('title4')}}">
                            {!! $errors->first('title4','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('url') ? 'text-danger' : '' }}">
                            <label for="url">url</label>
                            <input name="url" type="text" class="form-control" id="url" placeholder="Ingrese url" value="{{old('url')}}">
                            {!! $errors->first('url','<span class="help-block">:message</span>') !!}
                        </div>



                        <div class="form-group">
                            <p class="font-weight-bold">Estado</p>
                            <label for="">
                               Activado {!! Form::radio('state', 1, true) !!}
                            </label>
                            <label for="">
                                Desactivado{!! Form::radio('state', 0) !!}
                            </label>

                            @error('state')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-block">Guardar Slider</button>
                    </div>

                </div>
                <!-- /.card -->



              </div>
              <!--/.col (left) -->
              <!-- right column -->

           </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
 </section>

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


