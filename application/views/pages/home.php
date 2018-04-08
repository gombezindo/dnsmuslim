<!--banner-->
<div class="banner">
	<div class="container">
		<div class="banner-text">
			<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">
				<h2>On Entire Fashion range</h2>
				<h3>Coming Soon </h3>
				<h4>Our New Designs</h4>
				<div class="count main-row">
					<ul id="example">
						<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
						<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
						<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
					</ul>
						<div class="clearfix"> </div>
						<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countdown.min.js"></script>
						<script type="text/javascript">
							$('#example').countdown({
								date: '12/24/2020 15:59:59',
								offset: -8,
								day: 'Day',
								days: 'Days'
							}, function () {
								alert('Done!');
							});
						</script>
				</div>
			</div>
			<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">
				<section class="slider grid">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<h4>-30%</h4>
								<img src="<?php echo base_url();?>assets/images/b1.png" alt="">
							</li>
							<li>
								<h4>-25%</h4>
								<img src="<?php echo base_url();?>assets/images/b2.png" alt="">
							</li>
							<li>
								<h4>-32%</h4>
								<img src="<?php echo base_url();?>assets/images/b3.png" alt="">
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
				<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
						$('.flexslider').flexslider({
						animation: "pagination",
						start: function(slider){
							$('body').removeClass('loading');
						}
						});
					});
				</script>
				<!--End-slider-script-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//banner-->
<!--new-->
<div class="new">
	<div class="container">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">New <span>Arrivals</span></h3>
		</div>
		<div class="new-info">
			<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
				<div class="new-top">
					<a href="404.html"><img src="<?php echo base_url();?>assets/images/product/1.jpg" class="img-responsive" alt=""/></a>
					<div class="new-text">
						<ul>
							<li><a href="products.html">Show Details </a></li>
						</ul>
					</div>
				</div>
				<div class="new-bottom">
					<h5><a class="name" href="404.html">Kaos Anak Muslim 1</a></h5>
				</div>
			</div>
			<div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
				<div class="new-top">
					<a href="404.html"><img src="<?php echo base_url();?>assets/images/product/2.jpg" class="img-responsive" alt=""/></a>
					<div class="new-text">
						<ul>
							<li><a href="products.html">Show Details </a></li>
						</ul>
					</div>
				</div>
				<div class="new-bottom">
					<h5><a class="name" href="404.html">Kaos Anak Muslim 2</a></h5>
				</div>
			</div>
			<div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
				<div class="new-top">
					<a href="404.html"><img src="<?php echo base_url();?>assets/images/product/3.jpg" class="img-responsive" alt=""/></a>
					<div class="new-text">
						<ul>
							<li><a href="products.html">Show Details </a></li>
						</ul>
					</div>
				</div>
				<div class="new-bottom">
					<h5><a class="name" href="404.html">Kaos Anak Muslim 3</a></h5>
				</div>
			</div>
			<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay="1.1s">
				<div class="new-top">
					<a href="404.html"><img src="<?php echo base_url();?>assets/images/product/4.jpg" class="img-responsive" alt=""/></a>
					<div class="new-text">
						<ul>
							<li><a href="products.html">Show Details </a></li>
						</ul>
					</div>
				</div>
				<div class="new-bottom">
					<h5><a class="name" href="404.html">Kaos Anak Muslim 4</a></h5>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//new-->
<div class="trend wow zoomIn animated" data-wow-delay=".5s">
	<div class="container">
		<div class="trend-info">
			<section class="slider grid">
				<div class="flexslider trend-slider">
					<ul class="slides">
						<li>
							<div class="col-md-5 trend-left">
								<img src="<?php echo base_url();?>assets/images/t1.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 trend-left">
								<img src="<?php echo base_url();?>assets/images/t2.png" alt=""/>
							</div>
							<div class="col-md-7 trend-right">
								<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
								<h5>Flat 20% OFF</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
<!--//trend-->
