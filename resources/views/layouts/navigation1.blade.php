<nav x-data="{ open: false }" class="transition-all bg-white border-b border-gray-100 group dark:bg-gray-800 dark:border-gray-700 sm:w-16 sm:sticky sm:h-screen sm:top-0 sm:border-t-0 sm:z-[5]">
    <!-- Primary Navigation Menu -->
            <!-- Logo -->
    <div class="px-4 mx-auto transition-all max-w-7xl sm:absolute sm:max-w-none sm:mx-0 sm:px-0 sm:h-screen sm:w-16 sm:group-hover:w-64 sm:py-6 sm:bg-slate-300 sm:border-r sm:border-slate-400">
        <div class="justify-start gap-2">
            <div class="h-[75vh] flex gap-3 sm:flex-col">
                <!-- Logo -->
                <div class="flex shrink-0 sm:grid sm:place-content-center sm:mb-2">
                    <x-application-logo class="block w-auto text-gray-800 transition-all fill-current h-9 sm:h-20 sm:w-full sm:group-hover:h-40 dark:text-gray-200" />    
                </div>
                <!-- Navigation Links -->
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
                    <!-- Botón del menú -->
                    <button onclick="toggleMenu()" class="hidden p-2 space-x-8 text-sm font-medium transition-opacity sm:-my-px sm:ms-2 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-60 sm:group-hover:rounded-md sm:hover:bg-orange-600 sm:text-sky-700 sm:hover:text-slate-100">
                        Menú
                    </button>
                
                    <!-- Elementos desplegables -->
                    <div id="dropdown-menu" class="flex-col hidden p-2 mx-2 mt-1 shadow-inner border-y-2 border-sky-700 w-60">
                        <div class="space-x-8 transition-opacity sm:-my-px sm:hover:bg-orange-600">
                            <x-nav-link :href="route('inventario')" :active="request()->routeIs('inventario')">
                                {{ __('Inventario') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Settings Dropdown -->
            <div class="relative h-[20vh] flex justify-center items-end">
            <div class="hidden transition-opacity sm:w-64 sm:bottom-0 sm:hidden sm:items-center sm:opacity-0 sm:group-hover:w-64 sm:group-hover:opacity-100 sm:group-hover:flex">
                <x-dropdown align="right" width="64">
                    <x-slot name="trigger">
                        <button class="relative inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-orange-200 transition duration-150 ease-in-out border border-transparent rounded-none hover:text-blue-950 bg-blue-950 sm:w-64 hover:bg-orange-500 focus:outline-none">
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
                </x-dropdown>
            </div>
            </div>
        </div>
        
    </div>
    
    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdown-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</nav>