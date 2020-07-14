<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('template/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet"> -->
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
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/modals.css')}}">
    <!-- tabs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('template/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{url('template/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('template/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('head')
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        @include('layouts.admin.sidebar')
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('layouts.admin.navbar')
            <!-- Header top area end-->
            @yield('content')
            <!-- Static Table End -->
        </div>
    </div>
    <!-- Footer Start-->
    <!-- <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <!-- <div class="chat-list-wrap">
    <div class="chat-list-adminpro">
    <div class="chat-button">
        <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
      </div>
      <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
        <div class="chat-main-list">
          <div class="chat-heading">
            <h2>Messanger</h2>
          </div>
          <div class="chat-content chat-scrollbar">
            <div class="author-chat">
              <h3>Monica <span class="chat-date">10:15 am</span></h3>
              <p>Hi, what you are doing and where are you gay?</p>
            </div>
            <div class="client-chat">
              <h3>Mamun <span class="chat-date">10:10 am</span></h3>
              <p>Now working in graphic design with coding and you?</p>
            </div>
            <div class="author-chat">
              <h3>Monica <span class="chat-date">10:05 am</span></h3>
              <p>Practice in programming</p>
            </div>
            <div class="client-chat">
              <h3>Mamun <span class="chat-date">10:02 am</span></h3>
              <p>That's good man! carry on...</p>
            </div>
          </div>
          <div class="chat-send">
            <input type="text" placeholder="Type..." />
            <span><button type="submit">Send</button></span>
          </div>
        </div>
      </div>
    </div>
    </div> -->
    <!-- Chat Box End-->
    @include('sweetalert::alert')
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
    <!-- modal JS
		============================================ -->
    <script src="{{url('template/js/modal-active.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{url('template/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{url('template/js/counterup/waypoints.min.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{url('vendor/sweetalert/sweetalert.all.js')}}"></script>
    <script src="{{url('template/js/main.js')}}"></script>
    @yield('script')


</body>

</html>
