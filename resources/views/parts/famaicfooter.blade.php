    <!--====== Footer area start ======-->
	<footer>
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="widget text-block-widget">
							<h4 class="widget-title">Nosotros.</h4>
							<p>
								{{ $configurations->description }}
							</p>
							<a href="{{ route('about.index') }}" class="read-more-btn">Ver más</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget menu-widget">
							<h4 class="widget-title">Productos.</h4>
							<ul>
								<li><a href="about.html">About Us</a></li>
								<li><a href="blog.html">Latest Post</a></li>

							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget menu-widget">
							<h4 class="widget-title">Productos.</h4>
							<ul>
								<li><a href="service-details.html">web development</a></li>
								<li><a href="service-details.html">ui/ux design</a></li>

							</ul>
						</div>
					</div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
						<div class="widget menu-widget">
							<h4 class="widget-title">Productos.</h4>
							<ul>
								<li><a href="service-details.html">web development</a></li>
								<li><a href="service-details.html">ui/ux design</a></li>

						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-6 col-12">
						<div class="footer-logo text-center text-md-left">
							<img src="{{ Storage::disk("s3")->url($configurations->logo) }}" width="150px" alt="FAMAIC">
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="copyright text-center text-md-right">
							<p>Copyright {{ now()->year; }}. Todos los derechos reservados</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer area end ======-->
