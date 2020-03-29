<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Style -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

    <!-- Nav bar start-->

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('post')}}">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('category')}}">Category</a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('logout')}}">Logout</a>
                        </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('login')}}">Login</a>
                        </li>
                        @endguest


                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>

 <!-- Nav bar end-->


 <!-- Content start-->
    @yield('content')

    </body>
</html>
