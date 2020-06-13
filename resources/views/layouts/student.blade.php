<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
         <title>{{ config('app.name', 'SSU') }}</title>


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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home 
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-registered">
      
          </i>
           Registeration
        </a>
      </li>
	  
	    <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
      
          </i>
           Complain
        </a>
      </li>
	  
	    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fa fa-comment">
           
          </i>
          Chat
        </a>
      </li>
     
      
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
          <i class="fa fa-table">
           
          </i>
          Time Table
        </a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fa fa-server">
           
          </i>
          My Course
        </a>
      </li>
	  
	    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fa fa-lock">
           
          </i>
          Change Pass
        </a>
      </li>
	  
	    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fa fa-sign-out">
           
          </i>
          Sign Out
        </a>
      </li>
      
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
  <div class="row">
  <div class="col-md-12" style="margin-top:2px;">
	  <div class="alert alert-secondary  ">
	    WELCOME: {{ Auth::user()->name }}
	</div>
	</div>
	
        <div class="col-md-6"> 
            @yield('content')
         
    </div>
	
	
        <div class="col-md-6">
            
             <div class="col-md-10 offset-md-2">
               <div class="linkbox">
            <div class="row">
				<div class="col-md-3 collink"> 
                    <a href="/Dashboard" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-home"></i>                
                      </div>
                         Home
                   </a>
	                </div>
			
					<div class="col-md-3 collink"> 
                    <a href="/timeTable" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-table"></i>                
                      </div>
                         Time Table
                   </a>
	                </div>
					
					<div class="col-md-3 collink"> 
                    <a href="/chat" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-comment"></i>                
                      </div>
                         Class Chat
                   </a>
	                </div>
					
					<div class="col-md-3 collink"> 
                    <a href="" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-envelope-o"></i>                
                      </div>
                         Complain
                   </a>
	                </div>
					
					<div class="col-md-3 collink"> 
                    <a href="" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-lock"></i>                
                      </div>
                         Change Pass
                   </a>
	                </div>
					
					<div class="col-md-3 collink"> 
                    <a href="/Courses" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-comment"></i>                
                      </div>
                         My Course
                   </a>
	                </div>
					
					<div class="col-md-3 collink"> 
                    <a href="/Register/Courses" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-registered"></i>                
                      </div>
                         Registration
                   </a>
	                </div>			
							
					
				      	<div class="col-md-3 collink"> 
                    <a href="" class="limx">
                    <div class="roundlink">            
                     <i class="fa fa-sign-out"></i>                
                      </div>
                         Sign Out 
                   </a>
	                </div>
			   
			</div>
			</div>

             </div>
  
        </div>

 
 
	
    </div>
    </div>
	
	
    </div>
</body>
</html>
