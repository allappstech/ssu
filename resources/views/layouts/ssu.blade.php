<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>SSU</title>


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/ssu.css') }}" rel="stylesheet">
        <!-- Styles -->
         
    </head>
    <body>
        <div class="wrapper">
<div class="mytop">
     
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">
  <img height="80"src="{{ asset('images/logo.png') }}"> 
  </a>
 <span class="text  hnote">SOKOTO STATE UNIVERSITY</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
       
     
      
    </ul>
 
                     
                   

                      
                  
          
    <ul class="navbar-nav ">
   @if (Route::has('login')) 
                    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="fa fa-sign-in">
           
          </i>
          Login
        </a>
      </li>
    @else

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="fa fa-home">
           
          </i>
          Login
        </a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fa fa-sign-in">
           
          </i>
          Login
        </a>
      </li>
       @if (Route::has('register')) 
      <li class="nav-item">
        <a class="nav-link" href="{{ route('student_register') }}">         
         
          <i class="fa fa-registered ">  </i>
                             Register
                     
        </a>
      </li> 
          @endif
       @endauth 
       @endif
    </ul> 
   
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>

<div class="container">
  @yield('content')
</div>

<div class="container-fluid section-bg">
    <hr>
 

 
 

 
</div>
</div>
    </body>
</html>
