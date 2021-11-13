<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />

		<!-- Font-awesome  css -->
		<link href="assets/css/icons.css" rel="stylesheet"/>

		<!--Select2 css -->
		<link href="assets/plugins/select2/select2.css" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="assets/plugins/cookie/cookie.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!--Jquery flexdatalist  css -->
		<link href="assets/plugins/jquery.flexdatalist/jquery.flexdatalist.css" rel="stylesheet">

		<!-- Switcher css -->
		<link  href="assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/color-skins/color.css" />

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('inc.navbar')
    @yield('content')
	@include('inc.footer')
    
</body>
</html>