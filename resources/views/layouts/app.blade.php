<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unknown') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" >
    
     <!-- Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/helpers.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    @yield('css')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="min-width:391px !important;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid" style="margin:0 15px;">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a
                    @if(Auth::check())    
                     <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown navbar-brand list-unstyled">
                          <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #5e5e5e; margin-left:100px;">
                            Browse <span class="caret"></span>
                          </a>
                            
                              <ul class="dropdown-menu" role="menu">
                                <div class="dropdown-header"> Category</div>
                                    <li>
                                        <a href=" {{ url('gallery/furniture') }}">Furniture</a>
                                    </li>
                                    <li>
                                        <a href=" {{ url('gallery/electronics') }}">Electronics</a>
                                    </li>
                              </ul>
                        </li>
                     </ul>
                     @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Notification Links -->
                        @if (Auth::check())  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-bell fa-2x" aria-hidden="true"></i>
                                </a>
                    
                                <ul class="dropdown-menu" role="menu">
                                @if(count(Auth::user()->unreadNotifications) > 0)
                                    @foreach(Auth::user()->unreadNotifications as $notification)
                                        <li>
                                            <a href="#" style="padding: 30px 20px;" data-notif-id="{{$notification->id}}">
                                                {{ $notification->data['message'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <p style="padding: 30px 20px;">No new notifications.</p>
                                @endif
                                </ul>
                            </li>
                        @endif
                        
                       
                      
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                            <a href="#">
                                               <i class="fa fa-user" aria-hidden="true"></i> Messages
                                            </a>
                                    </li>
                                    <li>
                                            <a href="#">
                                               <i class="fa fa-user" aria-hidden="true"></i> Account
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
<script
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @yield('js');
</body>
</html>
