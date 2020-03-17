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
                            <a class="nav-link " href="{{route('reg')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('category')}}">Category</a>
                        </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

 <!-- Nav bar end-->


 <!-- Content start-->
    @yield('content')

    </body>
</html>
