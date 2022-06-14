<html>
    <head>
		<title> @yield('title') </title>
<style>
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v129/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
    .card {
    margin: 1rem 13px;
    }
    </style>
        <link rel="stylesheet" href="{{URL::asset('css/app-assets/css/custom/custom.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css')}}"/>

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/vendors/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/materialize.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/themes/vertical-gradient-menu-template/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app-assets/css/custom/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css\app-assets\fonts\fontawesome\css\all.min.css')}}">



        <script src="{{URL::asset('css/app-assets/js/vendors.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/plugins.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/search.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/custom/custom-script.min.js')}}"></script>
        <script src="{{URL::asset('css/app-assets/js/scripts/customizer.min.js')}}"></script>

    </head>
	<body class="d-flex flex-column h-100">


		@include('header')
        @if(session()->has('message'))
        <div class="card-alert card green">
            <div class="card-content white-text">
              <p>

                <div class="alert alert-success1">
                    {{ session()->get('message') }}
                </div>

        </p>
            </div>


            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          @endif


		@section('container')

		@show
        <script>
            $(document).ready(function(){

               $(".card-alert .close").click(function(){

                   $(this).closest(".card-alert").fadeOut("slow")});


             });


           </script>

	</body>
</html>

