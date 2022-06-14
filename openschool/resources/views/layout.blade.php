<html>
    <head>
		<title> @yield('title') </title>
        <link rel="stylesheet" href="{{URL::asset('css/app-assets/css/custom/custom.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css')}}"/>

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/vendors/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/custom/custom.css')}}">
        <script src="{{URL::asset('css/app-assets/js/vendors.min.js')}}"></script>

        <script src="{{URL::asset('css/app-assets/js/plugins.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/search.min.js')}}"></script>

        <script src="{{URL::asset('css/app-assets/js/custom/custom-script.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/scripts/customizer.min.js')}}"></script>

    </head>
	<body class="d-flex flex-column h-100">


		@include('header')

		@section('container')

		@show


	</body>
</html>

