@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
              
               
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">inicio</a></li>
                <li class="breadcrumb-item active">Hostings</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection


    @section('content')
        
    <section class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">
                  <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Nuevo Plan de Hosting</h3>
                        </div>

                        <div class="card-body"> 

                            {!! Form::model($hosting, ['route'=>['hosting.update', $hosting], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

                                {{-- {!! Form::hidden('user_id', auth()->user()->id) !!}     --}}

                                
                                @include('admin.hostings.partials.form')     
                                       

                                {!! Form::submit('Actualizar Hosting ', ['class'=>'btn btn-primary btn-block']) !!}

                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>    

        </div>
    </section>

    @endsection

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
  <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>


  <script>
    $(document).ready(function() {
        $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });



    ClassicEditor
    .create( document.querySelector( '#longdescription' ) )
    .catch( error => {
        console.error( error );
    } );

    //cambiar imagen
    document.getElementById("file").addEventListener('change',cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }

</script>


@endpush

