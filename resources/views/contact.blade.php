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


            <section class="section section-lg bg-transparent pt-5 novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":true,"id":"breadcrumb-5"}'>
                <div class="container">
                        <!-- Breadcrumb-->
                        <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a class="breadcrumb-link" href="/">Inicio</a></li>

                          <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Contáctenos</span></li>
                        </ul>
                  <h1>{{ $pagescontacts->title1 }} </h1>
                </div>
              </section>
              <!-- Contact us-->
              <section class="section section-md bg-transparent novi-background" data-preset='{"title":"Contact Us","category":"contacts","reload":true,"id":"contact-us-2"}'>
                <div class="container">
                  <div class="row row-40">
                    <div class="col-sm-10 col-md-6">
                      <h3>{{ $pagescontacts->title2 }}</h3>
                      <p>{{ $pagescontacts->saludo }}</p>
                      <div class="offset-md">
                        <div class="d-inline-flex align-items-center"><span class="icon icon-xs int-phone novi-icon me-2"></span>
                          <div class="h5"><a href="tel:#">{{ $configurations->telephono}}</a></div>
                        </div>
                      </div>
                      <div class="offset-xs">
                        <div class="h5">{{ $configurations->address}}</div>
                      </div>
{{--                       <ul class="list list-xs small">
                        <li class="list-item">Monday-Friday: 8am - 6pm</li>
                        <li class="list-item">Saturday-Sunday: 8am - 2pm</li>
                        <li class="list-item">Holidays: closed</li>
                      </ul> --}}
                      <ul class="list">
                        <li class="list-item"><a class="link link-secondary" href="mailto:#">{{ $configurations->email }}</a></li>
                        {{-- <li class="list-item"><a class="link link-secondary" href="mailto:#">info@demolink.org</a></li> --}}
                      </ul>
                    </div>

                    <div class="col-md-6">
                      <h3>Escríbanos</h3>

                      @if(session()->has('flash'))
                      <div class="alert alert-success "><mark>{{ session('flash') }}</mark></div>
                      @endif

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
                          <div class="col-md-12">
                            <button class="btn btn-primary " type="submit">Enviar mensaje</button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </section>




@stop
