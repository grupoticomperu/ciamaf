      <!-- Revolution overlay horizontal-->
      <section class="section" data-preset='{"title":"Revolution Overlay Horizontal","category":"slider","reload":true,"id":"revolution-overlay-horizontal"}'>
        <div class="rev_slider_wrapper fullscreen-container context-dark bg-900 text-center" id="rev_slider_overlay_horizontal_wrapper">
          <div class="rev_slider fullscreenbanner" id="rev_slider_overlay_horizontal" style="display:none;" data-version="5.4.1">
            <ul>

            @foreach ( $slider as $slide )

              <li data-transition="slidingoverlayhorizontal"><img class="rev-slidebg" src="{{ Storage::disk("s3")->url($slide->image)}}" alt="HPRSAC" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15">
                <div class="rev_row_zone rev_row_zone_middle" style="z-index: 1">
                  <div class="tp-caption" data-type="row" data-frames="[{&quot;delay&quot;: 500, &quot;speed&quot;: 300, &quot;from&quot;: &quot;opacity: 0&quot;, &quot;to&quot;: &quot;opacity: 1&quot;}, {&quot;delay&quot;: &quot;wait&quot;, &quot;speed&quot;: 300, &quot;to&quot;: &quot;opacity: 0&quot;}]">
                    <div class="tp-caption" data-type="column" data-columnwidth="100%" data-frames="[{&quot;delay&quot;: 1500, &quot;speed&quot;: 300, &quot;from&quot;: &quot;opacity: 0&quot;, &quot;to&quot;: &quot;opacity: 1&quot;}, {&quot;delay&quot;: &quot;wait&quot;, &quot;speed&quot;: 300, &quot;to&quot;: &quot;opacity: 0&quot;}]">
                      <section class="section-sm">
                        <div class="container">
                          <div class="row justify-content-sm-center align-items-sm-center novi-disabled">
                            <div class="col-md-10">
                              <div class="tp-caption" data-type="text" data-frames="[{&quot;delay&quot;:0,&quot;split&quot;:&quot;chars&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:700,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-whitespace="normal">
                                <h1 class="text-uppercase">{{ $slide->title1 }}</h1>
                              </div>
                              <div class="tp-caption mt-4" data-type="text" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-whitespace="normal">
                                <h5>{{ $slide->title2 }}</h5>
                              </div>
                              <div class="tp-caption mt-5" data-type="text" data-frames="[{&quot;delay&quot;:1600,&quot;speed&quot;:1700,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-whitespace="normal">
                                <a class="btn btn-lg btn-light btn-outline btn-anis" href="{{ $slide->url }}" target="_blank">Ver Más</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </li>

            @endforeach


            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div>
          </div>
                <!-- Preloader-->
                <div class="rev-slider-preloader">
                  <div class="rev-slider-preloader-item">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
        </div>
      </section>
