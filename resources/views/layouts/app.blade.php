<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logo.png')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/normalize.css')}}">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/form.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/login.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="darklayout">
    @yield('content')
    <!-- jquery
		============================================ -->
    <script src="{{url('template/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('template/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('template/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{url('template/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- form validate JS
		============================================ -->
    <script src="{{url('template/js/jquery.form.min.js')}}"></script>
    <script src="{{url('template/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('template/js/form-active.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('template/js/main.js')}}"></script>

</body>

</html>
