@extends('layout')

@section('title')
{{ $abouts->title }}
@stop

@section('meta-title')
{{ $abouts->title }}
@stop

@section('meta-description')
{{ $abouts->description }}
@stop

@section('keywords')
{{ $abouts->keywords }}
@stop

@section('contenido')

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url({{ Storage::disk("s3")->url($abouts->imagenbaner ) }});">
        <div class="container">
            <span class="page-tag">Bienvenido a FAMAIC </span>
            <h1 class="page-title">Nosotros</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Inicio</a></li>
                <li>Nosotros</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-gallery">
                        <div class="image-one" style="background-image: url({{ Storage::disk("s3")->url($abouts->imagen1 ) }});">
                        </div>
                        <div class="image-two" style="background-image: url({{ Storage::disk("s3")->url($abouts->imagen2 ) }});">
                        </div>
                        <div class="image-three" style="background-image: url({{ Storage::disk("s3")->url($abouts->imagen3 ) }});">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-10">
                    <div class="about-text p-left">
                        <div class="section-title mb-30">
                            <span class="title-tag">Bienvenido</span>
                            <h2 class="title">

                            </h2>
                            <p>
                                {!! $abouts->our !!}
                            </p>
                        </div>


                        <div class="section-title mb-20 mt-20">

                            <h2 class="title mt-20">
                                Misión
                            </h2>
                            <p>
                                {!! $abouts->mission !!}
                            </p>

                        </div>


                        <div class="section-title mb-30">

                            <h2 class="title">
                                Visión
                            </h2>
                            <p>
                                {!! $abouts->vission !!}
                            </p>

                        </div>


                        <div class="founder-info mt-40">
                            <div>
                               {{--  <img src="assets/img/about/founder.jpg" alt="Founder"> --}}
                            </div>
                            <div>
                                {{-- <h3>Andrés Caceres</h3>
                                <span>Gte. Gral</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <!--====== Counter Start ======-->
    <section class="counter-section counter-boxed-style">
        <div class="container">
            <div class="counter-boxed-innter">
                <div class="row counter-boxes">
                    <div class="col-lg-4 col-sm-4">
                        <div class="counter-box white-style text-center">
                            <span class="count">{{ $configurations->years }}</span>
                            <span class="title">Años de Experiencia</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="counter-box white-style text-center">
                            <span class="count">{{ $configurations->works }}</span>
                            <span class="title">Trabajos Realizados</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="counter-box white-style text-center">
                            <span class="count">{{ $configurations->customers }}</span>
                            <span class="title">Clientes</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--====== Counter End ======-->

    <!--====== History Section Start ======-->
    <!--====== Team Section Start ======-->
    <section class="team-section section-gap mt-5">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span class="title-tag"></span>
                <h2 class="title"> MARCAS CON LAS QUE TRABAJAMOS </h2>
            </div>

            @php
                 $brands = $marcas->chunk(3);
                 $cant = $brands->count();
            @endphp

            @for($i = 0; $i < $cant; $i++)

                <div class="row mb-5">
                    @foreach ( $brands[$i] as $marca )

                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="member-image">
                                    <img src="{{ Storage::disk("s3")->url($marca->imagen ) }}" alt="FAMAIC">
                                </div>
                                <div class="member-desc">
                                    <h3 class="name">{{ $marca->name }}</h3>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            @endfor





        </div>
    </section>
    <!--====== Team Section End ======-->

    <!--====== Testimonials End ======-->
@stop
