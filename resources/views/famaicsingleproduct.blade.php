@extends('layout')

@section('title')
{{ $product->name }}
@stop

@section('meta-title')
{{ $product->title}}
@stop

@section('meta-description')
{{ $product->description }}
@stop

@section('keywords')
{{ $product->keywords }}
@stop

@section('contenido')




    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url({{ Storage::disk("s3")->url($product->image2 ) }});">
        <div class="container">
            <span class="page-tag">FAMAIC</span>
            <h1 class="page-title">{{ $product->name }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Inicio</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== Portfolio Details Start ======-->
    <section class="portfolio-details-warp section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="portfolio-details-content">
                        <div class="entry-thumb mb-50">
                            @if($product->image3)
                            <img src="{{ Storage::disk("s3")->url($product->image3 ) }}" alt="{{ $product->name }}">
                            @endif

                        </div>
                        <p>

                            <h2 class="title">
								{{ $product->name }} <span>FAMAIC</span>
							</h2>
                        </p>
                        <p class="dropcap">
                            {!! $product->description !!}
                        </p>



                        <div class="portfolio-gallery">
                            <div class="row">
                                <div class="col-lg-12 col-sm">
                                    @if($product->image4)
                                        <img src="{{ Storage::disk("s3")->url($product->image4 ) }}" alt="{{ $product->name }}">
                                    @endif
                                </div>
                           {{--      <div class="col-lg-6 col-sm">
                                    <img src="{{ Storage::disk("s3")->url($product->image1 ) }}" alt="{{ $product->name }}">
                                </div> --}}
                            </div>
                        </div>

                        @if($product->video)
                        <div class="portfolio-video" style="background-image: url(/assets/img/portfolio-details/04.jpg);">
                            <a href="{{ $product->video }}" class="popup-video">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        @endif


                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="portfolio-sidebar">

                        <div class="appointment-form">
                            <span>Cotiza</span>
                            <h2 class="title">Este producto</h2>
                            @if(session()->has('flash'))
                                 <div class="alert alert-danger ">{{ session('flash') }}</div>
                            @endif
                            <form {{ route('orders', $product->id ) }}  method="POST">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" name="name" value="{{old('name')}}" placeholder="Tu Nombre" required data-constraints="@Required">
                                    <span class="icon"><i class="far fa-user"></i></span>
                                    <div>
                                        @error('name')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="movil" value="{{old('movil')}}" placeholder="Tu Celular" required data-constraints="@Required">
                                    <span class="icon"><i class="far fa-phone"></i></span>
                                    @error('movil')
                                          <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" value="{{old('email')}}" placeholder="Tu Email" required data-constraints="@Email @Required">
                                    <span class="icon"><i class="far fa-envelope"></i></span>
                                    @error('email')
                                          <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group textarea">
                                    <textarea name="message" placeholder="Tu Pedido" required data-constraints="@Required">{{old('message')}}</textarea>
                                    <span class="icon"><i class="far fa-pencil"></i></span>
                                    @error('message')
                                          <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="input-group">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}

                                    @error('g-recaptcha-response')
                                          <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>

                                <div class="input-group textarea">
                                    <button type="submit" class="main-btn">Cotizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Portfolio Details End ======-->
@stop
