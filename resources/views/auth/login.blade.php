@prepend('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/authentication.css') }}">
@endprepend
@extends('layouts.app')
@section('title', 'Login')
@section('content')

<section>
   <div class="container">
       <div class="row justify-content-center">
       
           <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
               <form method="POST" action="{{ route('login') }}">
                   @csrf
                   <div class="crs_log_wrap">
                       <div class="crs_log__thumb">
                           <img src="assets/img/login.jpg" class="img-fluid" alt="" />
                       </div>
                       <div class="crs_log__caption">
                           <div class="rcs_log_123">
                               <div class="rcs_ico"><i class="fas fa-lock"></i></div>
                           </div>
                           
                           <div class="rcs_log_124">
                               <div class="Lpo09"><h4>{{ __('Login') }}</h4></div>
                               <div class="form-group">
                                   <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>

                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                               </div>
                               <div class="form-group">
                                   <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*******">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                               </div>
                               <div class="form-group row">
                                   <div class="col-xl-4 col-lg-4 col-4">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                   <label class="checkbox-custom" for="remember">
                                       {{ __('Remember Me') }}
                                   </label>
                                   </div>
                                   <br/>
                               </div>
                               <div class="form-group">
                                   <button type="submit" class="btn full-width btn-md theme-bg text-white">
                                       {{ __('Login') }}
                                   </button>
                               </div>
                           </div>
                       </div>
                       <div class="crs_log__footer d-flex justify-content-between">
                           <div class="fhg_45"><p class="musrt">Don't have account? <a href="{{ route('register') }}" class="theme-cl">Login</a></p></div>
                           <div class="fhg_45"><p class="musrt">
                               @if (Route::has('password.request'))
                               <a class="text-danger" href="{{ route('password.request') }}">
                                   {{ __('Forgot Your Password?') }}
                               </a>
                           @endif
                           </p></div>
                       </div>
                   </div>
               </form>
           </div>

       </div>
   </div>
</section>

@endsection