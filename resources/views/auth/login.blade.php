<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; UNICI</title>

 <!-- General CSS Files -->
 <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-social/bootstrap-social.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-social/bootstrap-social.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
 



<!-- Start GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('img/unici.png') }}" alt="logo" width="60%" class="">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4><CENTER>SISTEMA DE INVENTARIO UNICI</CENTER></h4></div>

              <div class="card-body">

              <x-auth-session-status class="mb-4" :status="session('status')" />
              <form method="POST" action="{{ route('login') }}">
              @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  class="form-control" name="email" tabindex="1" required autofocus>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" :value="__('Contraseña')" >Contraseña</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Recordar Contraseña
                        </a>
                      </div>
                    </div>
                    <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />


                   
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                      <label class="custom-control-label" for="remember-me">Recordar Contraseña</label>
                    </div>
                  </div>

               
                <!--  <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div> -->


        <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Iniciar sesión') }}
                    </button>
                  </div>
                
                </form>
             
               

              
            </div>
          
          </div>
        </div>
      </div>
    </section>
  </div>


</body>
</html>