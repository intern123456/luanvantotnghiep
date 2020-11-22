<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Apple Store </title>
		<link rel="shortcut icon" href="images/favicon.png">
        <base href="{{asset('')}}">

		<link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/shop.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/layout.css' type='text/css' media='all'/>
		@yield('css')
	</head>

	<body>
			<header class="header-type-classic header-absolute header-transparent">
            @include("layout.header")
				<div class="navbar-container">
					<div class="navbar navbar-default  navbar-scroll-fixed">
                    @include("layout.menu")
					</div>

				</div>
			</header>
            @yield('content')


            @include('layout.footer')

		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.parallax.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
		<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
		@yield('script')
</body>
</html>
