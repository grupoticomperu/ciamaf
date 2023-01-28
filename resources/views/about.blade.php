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



<section class="section section-sm section-layer context-dark pb-1" data-preset='{"title":"Intro","category":"intro","reload":true,"id":"intro-4"}'>
    <div class="bg-layer bg-primary novi-background" style="bottom: 9.4%;"></div>
    <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="/">Inicio</a></li>
              {{-- <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Pages</a></li> --}}
              <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Nosotros</span></li>
            </ul>
      <h4>Acerca de Nosotros</h4>
      <div class="row row-30 mt-4">
        <div class="col-xs-10 col-sm-5" style="padding-top: 8.6%;">
          <h1>{!! $abouts->title !!}</h1>
        </div>
        <div class="col-xs-10 col-sm-7"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($abouts->imagen2) }}" alt="HPR SAC" width="730" height="730">
        </div>
      </div>
    </div>
  </section>
  <!-- Mision-->
  <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Vision","category":"content box","reload":true,"id":"vision"}'>
    <div class="container">
      <div class="row row-30 novi-disabled">
        <div class="col-md-5">
          <h4>Misión</h4>
        </div>
        <div class="col-md-7">
          <h2 class="text-primary"> {!! $abouts->mission !!}</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Section divider-->
  <section class="section novi-background" data-preset='{"title":"Divider Section","category":"content box","reload":true,"id":"divider-section"}'>
    <div class="container">
      <div class="divider divider-sm"></div>
    </div>
  </section>
  <!-- Values-->
  <!-- Mision-->
  <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Vision","category":"content box","reload":true,"id":"vision"}'>
    <div class="container">
      <div class="row row-30 novi-disabled">
        <div class="col-md-5">
          <h4>Misión</h4>
        </div>
        <div class="col-md-7">
          <h2 class="text-primary"> {!! $abouts->vission !!}</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Section divider-->
  <section class="section novi-background" data-preset='{"title":"Divider Section","category":"content box","reload":true,"id":"divider-section"}'>
    <div class="container">
      <div class="divider divider-sm"></div>
    </div>
  </section>



   <!-- Mision-->
   <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Vision","category":"content box","reload":true,"id":"vision"}'>
    <div class="container">
      <div class="row row-30 novi-disabled">
        <div class="col-md-5">
          <h4>Nosotros</h4>
        </div>
        <div class="col-md-7">
          <h2 class="text-primary"> {!! $abouts->our !!}</h2>
        </div>
      </div>
    </div>
  </section>








@stop
