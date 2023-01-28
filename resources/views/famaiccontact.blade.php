@extends('layout')


@section('title')
{{ $pagescontacts->title }}
@stop

@section('meta-title')
{{ $pagescontacts->title }}
@stop

@section('meta-description')
{{ $pagescontacts->description }}
@stop

@section('keywords')
{{ $pagescontacts->keywords }}
@stop

@section('contenido')


    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url({{ Storage::disk("s3")->url($pagescontacts->imagen ) }});">
        <div class="container">
            <span class="page-tag">FAMAIC</span>
            <h1 class="page-title">{{ $pagescontacts->title1 }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Inicio</a></li>
                <li>contáctenos</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->



    <!--====== Contact Section Start ======-->
    <section class="contact-section section-gap-top mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10">
                    <div class="contact-info">
                        <div class="section-title mb-40">
                            <span class="title-tag">Informacion de Contacto</span>
                            <h2 class="title">Nuestro Local</h2>
                        </div>
                        <ul class="contact-info-list">
                            <li>
                                <p>
                                    {{ $configurations->address }}
                                </p>
                                <a href="#">Visítenos</a>
                            </li>
                            <li>
                                <p>
                                    {{ $configurations->movil }}
                                </p>
                                <p>
                                    {{ $configurations->telephono }}
                                </p>
                                <a href="#">Llamar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10">
                    @if(session()->has('flash'))
                      <div class="alert alert-success "><mark>{{ session('flash') }}</mark></div>
                      @endif
                    <div class="contact-form">
                        <form method="post" action="{{ route('contacts.store') }}">
                            {{ csrf_field() }}
                            <div class="row align-items-md-end row-20 row-md-30">
                              <div class="col-md-12">
                                <div class="form-wrap">
                                    <label >Nombres y Apellidos</label>
                                  <input class="form-control" id="contact-name" type="text" name="nombres" value="{{old('nombres')}}" required data-constraints="@Required">

                                  {!! $errors->first('nombres', '<span class=error>:message</span>')!!}
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-wrap">
                                    <label> Celular o Telefono </label>
                                  <input class="form-control" id="contact-phone" type="text" name="celular" value="{{old('celular')}}" required data-constraints="@PhoneNumber @Required">
                                  {!! $errors->first('celular', '<span class=error>:message</span>')!!}
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-wrap">
                                  <label>Mensaje</label>
                                  <textarea class="form-control" rows= "5" id="contact-message" name="mensaje" required data-constraints="@Required"> {{old('mensaje')}} </textarea>

                                  @error('mensaje')
                                  <mark> {{$message}} </mark>
                                 @enderror

                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-wrap">
                                    <label for="contact-email">E-mail</label>
                                  <input class="form-control" id="contact-email" type="email" name="email" value="{{old('email')}}" required data-constraints="@Email @Required">

                                  {!! $errors->first('email', '<span class=error>:message</span>')!!}
                                </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                <button class="button button-block button-secondary button-ujarak main-btn main-btn-2" type="submit">Enviar mensaje</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Section End ======-->



    <!--====== Contact Maps Start ======-->
    <section class="contact-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.722202774723!2d-76.9991130848353!3d-12.199295891365846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9e8eef92fd5%3A0x75ef920748464c17!2sFAMAIC%20SAC!5e0!3m2!1ses!2spe!4v1673483991734!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--====== Contact Maps End ======-->

@stop
