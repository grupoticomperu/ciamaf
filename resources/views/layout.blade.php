  <!DOCTYPE html>
  <html lang="es">

  <head>
      <!--====== Required meta tags ======-->
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!--====== Title ======-->
          <!-- Site Title-->
      <title>@yield('title', 'FAMAIC')</title>
      <META name="title" content="@yield('meta-title','FAMAIC') ">
      <META charset="utf-8" name="description" content="@yield('meta-description','FAMAIC')">
      <META name="keywords" content="@yield('keywords','FAMAIC')">

      <!--====== Favicon Icon ======-->
      <link rel="icon" href="{{ Storage::disk("s3")->url($configurations->icon) }}" type="/image/x-icon">

      <!--====== Animate Css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
      <!--====== Bootstrap css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
      <!--====== Fontawesome css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
      <!--====== Flaticon css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
      <!--====== Magnific Popup css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
      <!--====== Slick  css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
      <!--====== Style css ======-->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

      <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}" />


      {{-- ckeditor --}}
      <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
      @stack('styles')
      @livewireStyles
  </head>

  <body>

    <div class="div_btn_pal">
        <div class="palpitar"></div>
        <a class="btn_wht_escr" href="https://api.whatsapp.com/send?phone=51{{ $configurations->movil }}&text=Hola,%20tengo%20una%20consulta" target="_blank">
            <img class="img_wht_avz" src="/images/whatsapp.png">
            <div class="info_num">
                <p class="txt_num_hover">{{ $configurations->movil }}</p>
            </div>
        </a>
    </div>



    	<!--====== Preloader ======-->
	<div id="preloader">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</div>

    <div class="page">
        <!--RD Navbar-->

        @include('parts.famaicheader')

        <!-- Intro-->


        @yield('contenido')

        @include('parts.famaicfooter')

      </div>
      <!-- Page Loader-->


	<!--====== jquery js ======-->
	<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<!--====== Bootstrap js ======-->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!--====== Slick js ======-->
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<!--====== Isotope js ======-->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!--====== Imagesloaded js ======-->
	<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!--====== Magnific Popup js ======-->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!--====== inview js ======-->
	<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
	<!--====== Wow JS ======-->
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!--====== Main js ======-->
	<script src="{{ asset('assets/js/main.js') }}"></script>



      @stack('scripts')
      @livewireScripts

 </body>
 </html>














