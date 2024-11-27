<nav x-data="{ open: false }" class="transition-all bg-white border-b border-gray-100 group dark:bg-gray-800 dark:border-gray-700 sm:w-16 sm:sticky sm:h-screen sm:top-0 sm:border-t-0">
    <!-- Primary Navigation Menu -->
            <!-- Logo -->
    <div class="px-4 mx-auto transition-all max-w-7xl sm:absolute sm:max-w-none sm:mx-0 sm:px-0 sm:h-screen sm:w-16 sm:group-hover:w-64 sm:py-6 sm:bg-slate-300">
        <div class="flex justify-center gap-5 sm:flex-col">
            <!-- Logo -->
            <div class="flex shrink-0 sm:grid sm:place-content-center sm:mb-2">
                <x-application-logo class="block w-auto text-black fill-current h-9" />    
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('departamento.index')" :active="request()->routeIs('departamento.index')">
                    {{ __('Departamento') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('responsable')" :active="request()->routeIs('responsable')">
                    {{ __('Responsables') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('inventario')" :active="request()->routeIs('inventario')">
                    {{ __('Inventario') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('reportes')" :active="request()->routeIs('reportes')">
                    {{ __('Reportes') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('sourvenirs')" :active="request()->routeIs('sourvenirs')">
                    {{ __('Sourvenirs') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('papeleriainsumos')" :active="request()->routeIs('papeleriainsumos')">
                    {{ __('Insumos de papeleria') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 transition-opacity sm:-my-px sm:ms-10 sm:hidden sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex sm:group-hover:w-48 sm:group-hover:p-1 sm:group-hover:rounded-md sm:hover:bg-orange-600">
                <x-nav-link :href="route('inventarioactivos')" :active="request()->routeIs('inventarioactivos')">
                    {{ __('Inventario activos') }}
                </x-nav-link>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden transition-opacity sm:absolute sm:w-56 sm:bottom-24 sm:hidden sm:items-center sm:ms-6 sm:opacity-0 sm:group-hover:opacity-100 sm:group-hover:flex">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="relative inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-black transition duration-150 ease-in-out bg-blue-300 border border-transparent rounded-lg sm:w-52 hover:bg-orange-600 focus:outline-none">
                            <div class="w-[80%] text-left">{{ Auth::user()->name }}</div>
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
    
</nav>