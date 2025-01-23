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
<nav x-data="{ open: false }" class="transition-all bg-white border-b border-gray-100 group dark:bg-gray-800 dark:border-gray-700 sm:w-16 sm:sticky sm:h-screen sm:top-0 sm:border-t-0 sm:z-[5]">
    <!-- Primary Navigation Menu -->
            <!-- Logo -->



            <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="{{ asset('img/unici.png') }}" alt="logo" width="50%" class=""  style="margin-left: 19%;" >
          </div>
        
          <ul class="sidebar-menu">
           
             
             
             
             
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Herramientas</li>
           


        





               


            <li style="color: #192f59;"><a href="{{ route('dashboard') }}" style="color: #192f59;"><i class="fas fa-home"></i>  {{ __('Inicio') }}</a></li>




            <li ><a href="#" style="color: #192f59;"><i class="fas fa-user-alt"></i> <span>Gestión de Usuarios</span></a></li>

            






            <li >
              <a href="#" class="nav-link has-dropdown" style="color: #192f59;"><i class="fas fa-list-alt"></i><span> Inventario</span></a>
             
             
             
             
              <ul class="dropdown-menu">
                <li  ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"><i class="fas fa-pencil-ruler"></i> {{ __('Inventario General') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}"> <i class="fas fa-pencil-ruler"></i>{{ __(' Papeleria') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}"><i class="fas fa-pencil-ruler"></i> {{ __(' Souvenirs') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}"><i class="fas fa-pencil-ruler"></i> {{ __(' Publicidad') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}"><i class="fas fa-pencil-ruler"></i> {{ __('  Limpieza') }}</a></li>
               
              </ul>
            </li>




            <li >
              <a href="#" class="nav-link has-dropdown" style="color: #192f59;"><i class="far fa-file-alt"></i><span> Gestión de productos</span></a>
             
             
             
             
              <ul class="dropdown-menu">
                <li class=active ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"><i class="far fa-file-alt"></i> {{ __('Productos') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"> <i class="far fa-file-alt"></i>{{ __('Categorías') }}</a></li>

                
               
              </ul>
            </li>



            <li><a href="{{ route('dashboard') }}" style="color: #192f59;"><i class="fas fa-fire"></i>  {{ __('Proveedores') }}</a></li>



            <li><a href="{{ route('dashboard') }}" style="color: #192f59;"><i class="fas fa-fire"></i>  {{ __('Informes o Reportes') }}</a></li>



            <li >
              <a href="#" class="nav-link has-dropdown" style="color: #192f59;"><i class="fas fa-pencil-ruler"></i><span> Configuración</span></a>
             
             
             
             
              <ul class="dropdown-menu">
                <li  ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"><i class="fas fa-pencil-ruler"></i> {{ __('Campus') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"> <i class="fas fa-pencil-ruler"></i>{{ __('Areas') }}</a></li>

                <li ><a class="nav-link" href="{{ route('General.index') }}" style="color: #192f59;"><i class="fas fa-pencil-ruler"></i> {{ __('Responsables') }}</a></li>

               
              </ul>
            </li>

            <li><a href="{{ route('dashboard') }}" style="color: #192f59;"><i class="fas fa-fire"></i>  {{ __('Lector de QR') }}</a></li>

           
    <!--<div class="px-4 mx-auto transition-all max-w-7xl sm:absolute sm:max-w-none sm:mx-0 sm:px-0 sm:h-screen sm:w-16 sm:group-hover:w-64 sm:py-6 sm:bg-slate-300 sm:border-r sm:border-slate-400">
        <div class="justify-start gap-2">
            <div class="h-[75vh] flex gap-3 sm:flex-col">
                
                <div class="flex shrink-0 sm:grid sm:place-content-center sm:mb-2">
                    <x-application-logo class="block w-auto text-gray-800 transition-all fill-current h-9 sm:h-20 sm:w-full sm:group-hover:h-40 dark:text-gray-200" />    
                </div>
              
                <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                </div>
                
                {{-- <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('departamento.index')" :active="request()->routeIs('departamento.index')">
                        {{ __('Departamento') }}
                    </x-nav-link>
                </div> --}}

                <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('General.index')" :active="request()->routeIs('General.index')">
                        {{ __('Inventario') }}
                    </x-nav-link>
                </div>
                
                <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('responsable')" :active="request()->routeIs('responsable')">
                        {{ __('SAT') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('reportes')" :active="request()->routeIs('reportes')">
                        {{ __('Reportes') }}
                    </x-nav-link>
                </div>
                
                <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                    <x-nav-link :href="route('papeleriainsumos')" :active="request()->routeIs('papeleriainsumos')">
                        {{ __('Insumos papeleria') }}
                    </x-nav-link>
                </div>

                {{-- Este es el de osiris --}}
                <div class="sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:grid">
                 
                    <button onclick="toggleMenu()" class="hidden p-2 space-x-8 text-sm font-medium transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600 sm:text-sky-700 sm:hover:text-slate-100">
                        Menú
                    </button>
                
                 
                    <div id="dropdown-menu" class="flex-col hidden p-2 mx-2 mt-1 shadow-inner border-y-2 border-sky-700 w-60">
                        <div class="space-x-8 transition-opacity sm:-my-px sm:hover:bg-orange-600">
                            <x-nav-link :href="route('inventario')" :active="request()->routeIs('inventario')">
                                {{ __('Inventario') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>

            </div>


             Settings Dropdown -->
            
                <x-dropdown align="right" width="64">
                    <x-slot name="trigger">

                   

                    <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>{{ Auth::user()->name }}</span></a>
              <ul class="dropdown-menu">
              

              <li ><a class="nav-link" href="{{ route('profile.edit') }}" style="color: #192f59;"><i class="fas fa-pencil-ruler"></i>   {{ __('Perfil') }}</a></li>

              <form method="POST" action="{{ route('logout') }}">
                            @csrf
              <li ><a class="nav-link" href="{{ route('logout') }}" style="color: #192f59;"   onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fas fa-pencil-ruler"></i>  {{ __('Cerrar sesión') }}</a></li>

</form>
                       <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-gray-700 far fa-user"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-dropdown-link> -->
              
                            
              </ul>
            </li>
                     <!--   <button class="relative inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-orange-200 transition duration-150 ease-in-out border border-transparent rounded-none hover:text-blue-950 bg-blue-950 sm:w-64 hover:bg-orange-500 focus:outline-none">
                            <div class="w-[80%] text-left"> {{ Auth::user()->name }} </div>
                            <div class="absolute right-3 ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button> 
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-700">
                            {{ __('Perfil') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-gray-700"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>-->
            </div>
            </div>
        </div>
        
    </div>
    <!-- Main Content -->
     
    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdown-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</nav>



<!-- General JS Scripts -->
<script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/assets/js/page/index-0.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

