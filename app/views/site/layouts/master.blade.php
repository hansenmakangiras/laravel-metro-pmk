@include('site.layouts.partials.header')
<body>

<!-- Wrapper / Start -->
<div id="wrapper">

	<!-- Header -->
	<div id="top-line"></div>
		<!-- 960 Container -->
		<div class="container">
			<!-- Header -->
			<header id="header">
				<!-- Logo -->
				<div class="ten columns">
					<div id="logo">
						<h1><a href="#"><img src="{{asset('assets/img/logo.png')}}" alt="PMK LP3I Makassar" /></a></h1>
						<div id="tagline">Sukses Demi Kemuliaan Allah!</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<!-- Social / Contact -->
				<div class="six columns">
					<!-- Social Icons -->
					<ul class="social-icons">
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="dribbble"><a href="#">Dribbble</a></li>
						<li class="linkedin"><a href="#">LinkedIn</a></li>
						<li class="rss"><a href="#">RSS</a></li>
					</ul>
					<div class="clearfix"></div>

					<!-- Contact Details -->
					<div class="contact-details">Contact Phone: +48 880 440 110</div>
					<div class="clearfix"></div>

					<!-- Search -->
					<nav class="top-search">
						<form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
							<button class="search-btn"></button>
							<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />
						</form>
					</nav>
				</div>
			</header><!-- Header / End -->
			<div class="clearfix"></div>
		</div><!-- 960 Container / End -->

	<!-- Navigation -->
	@include('site.layouts.partials.navigation')
	<!-- Content -->
	@yield('content')
	<!-- Content / End -->
</div>
<!-- Wrapper / End -->


<!-- Footer -->

<!-- Footer / Start -->
@include('site.layouts.partials.footer')
<!-- Footer / End -->

@include('site.layouts.partials.script')
<!-- Footer Bottom / Start  -->
<footer id="footer-bottom">

	<!-- 960 Container -->
	<div class="container">

		<!-- Copyrights -->
		<div class="eight columns">
			<div class="copyright">
				© Copyright 2014 by <a href="{{url('/')}}">PMK LP3I Makassar</a>. All Rights Reserved.
			</div>
		</div>

		<!-- Menu -->
		<div class="eight columns">
			<nav id="sub-menu">
				<ul>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->


<!-- Style Switcher
================================================== -->
<link rel="stylesheet" href="{{asset('site/css/switcher.css')}}">
<script src="{{asset('site/scripts/switcher.js')}}"></script>

<section id="style-switcher">
	<h2>Style Switcher <a href="#"></a></h2>
	<div>
	<h3>Predefined Colors</h3>
		<ul class="colors" id="color1">
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="dark" title="Dark"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
			<li><a href="#" class="dirty-green" title="Dirty Green"></a></li>
		</ul>

	<h3>Menu Style</h3>
	<select id="menu-style">
		<option value="1">Style 1</option>
		<option value="2">Style 2</option>
	</select>

	<h3>Background Image</h3>
		 <ul class="colors bg" id="bg">
			<li><a href="#" class="bg1"></a></li>
			<li><a href="#" class="bg2"></a></li>
			<li><a href="#" class="bg3"></a></li>
			<li><a href="#" class="bg4"></a></li>
			<li><a href="#" class="bg5"></a></li>
			<li><a href="#" class="bg6"></a></li>
			<li><a href="#" class="bg7"></a></li>
			<li><a href="#" class="bg8"></a></li>
			<li><a href="#" class="bg9"></a></li>
			<li><a href="#" class="bg10"></a></li>
			<li><a href="#" class="bg11"></a></li>
			<li><a href="#" class="bg12"></a></li>
			<li><a href="#" class="bg13"></a></li>
			<li><a href="#" class="bg14"></a></li>
			<li><a href="#" class="bg15"></a></li>
			<li><a href="#" class="bg16"></a></li>
			<li><a href="#" class="bg17"></a></li>
			<li><a href="#" class="bg18"></a></li>
		</ul>
	</div>

	<div id="reset"><a href="#" class="button color blue">Reset</a></div>

</section>
<!-- Style Switcher / End -->


</body>
</html>