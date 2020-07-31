<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li><img src="{{url('images/logo.png')}}" alt="logo" style="margin-left: auto; margin-right:auto; display:block; width:20%; margin-top:2px; margin-bottom:2px;">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li>
                                <a style="font-size:16px; margin-top:3px;">{{carbon\carbon::now()->translatedformat('l, d F Y')}}</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">{{ Auth::user()->name }}</span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    @guest
                                    <li><a href="{{ route('login') }}"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>Register</a>
                                    </li>
                                    @endif
                                    @else
                                    <li><a href="{{route('settingIndex')}}"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                    </li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
