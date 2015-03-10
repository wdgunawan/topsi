<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Telephasic by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		{!!HTML::script("assets/js/jquery.min.js")!!}
		{!!HTML::script("assets/js/jquery.dropotron.min.js")!!}
		{!!HTML::script("assets/js/skel.min.js")!!}
		{!!HTML::script("assets/js/skel-layers.min.js")!!}
		{!!HTML::script("assets/js/init.js")!!}
		{!!HTML::script("assets/js/jquery.min.js")!!}
		{!!HTML::style("assets/datatables/jquery.dataTables.css")!!}
		{!!HTML::script("assets/datatables/jquery.dataTables.css")!!}
		{!!HTML::style("assets/css/glyphicons.css")!!}
		<noscript>
			{!!HTML::style("assets/css/skel.css")!!}
			{!!HTML::style("assets/css/style.css")!!}
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">
					<!-- Logo -->
						<h1 id="logo"><a href=".">PT NINDYA KARYA</a></h1>
				</div>
			</div>

		<!-- Main -->
			<div class="wrapper">
				<div class="container" id="main">

					<!-- Content -->
					@yield('content')
				</div>
			</div>

		<!-- Footer -->
				
				<div id="copyright" class="container" style="height:50px;">
					<ul class="menu">
						<li>&copy; Sistem Pendukung Keputusan. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>

	</body>
</html>