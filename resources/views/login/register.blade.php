 
    @extends('layouts.ssu')

@section('content')
 
    <div class="row p-2" >
    	<div class="col-md-12">  
    	  	<div class="alert alert-danger text text-primary"><b>Staff Resgistration</b></div>
        </div>
<div class="col-md-6  offset-md-2">
            <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>                        
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Staff Name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                             
                        </div>                   

                        <div class="form-group ">
                            <label for="email">{{ __('E-Mail Address') }}</label>
 
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
 
                                <input placeholder="password-confirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

       

    </div>

 

 @endsection