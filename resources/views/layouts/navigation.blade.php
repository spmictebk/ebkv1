<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <!-- <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div> -->

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Utama') }}
                    </x-nav-link>
                </div>
                @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list3.test3')" :active="request()->routeIs('list3.test3')">
                        {{ __('Senarai eKeberhasilan Pegawai') }}
                    </x-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list.pengguna')" :active="request()->routeIs('list.pengguna')">
                        {{ __('Selenggara Pengguna') }}
                    </x-nav-link>
                </div>

                
                @endif

                @if (Auth::user()->hasRole('pyd'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list.test')" :active="request()->routeIs('list.test')">
                        {{ __('Cipta eKeberhasilan') }}
                    </x-nav-link>
                </div>
                @endif

                @if (Auth::user()->hasRole('pp1'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list.test')" :active="request()->routeIs('list.test')">
                        {{ __('Cipta eKeberhasilan') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list3.test3')" :active="request()->routeIs('list3.test3')">
                        {{ __('Senarai eKeberhasilan Pegawai') }}
                    </x-nav-link>
                </div>

                @endif

                @if (Auth::user()->hasRole('pp2'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list.test')" :active="request()->routeIs('list.test')">
                        {{ __('Cipta eKeberhasilan') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list3.test3')" :active="request()->routeIs('list3.test3')">
                        {{ __('Senarai eKeberhasilan Pegawai') }}
                    </x-nav-link>
                </div>
                @endif

                @if (Auth::user()->hasRole('pengarah'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('list3.test3')" :active="request()->routeIs('list3.test3')">
                        {{ __('Senarai eKeberhasilan Pegawai') }}
                    </x-nav-link>
                </div>
                
                @endif

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
                            @if ( Auth::user()->avatar != NULL)
                            &nbsp;<img src="{{ asset('/storage/ebk/avatar/' . Auth::user()->avatar) }}" style="width: 70px; border-radius: 10%">
                            @else
                            &nbsp;<img src="{{ asset('/storage/ebk/avatar/unknown.png') }}" style="width: 70px; border-radius: 10%">
                            @endif
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <div class="flex">
                            <div data-attr="{{ route('daftar.profile') }}" id="profilButton" data-toggle="modal" data-target="#profilModal" class="cursor-pointer">
                                <button type="button" class="btn btn-outline-info btn-sm">{{ __('Kemaskini Profil') }}</button>
                            </div>
                            <form method="POST" action="{{ route('logout') }}" class="ml-2">
                                @csrf
                                <div onclick="event.preventDefault(); this.closest('form').submit();" class="cursor-pointer">
                                    <button type="button" class="btn btn-outline-danger btn-sm">{{ __('Keluar') }}</button>
                                </div>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Profil -->
<div class="modal fade profilModal" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-light bg-dark">
                <h5 class="modal-title" id="exampleModalLabel1">Profil Gambar</h5>
                </div>
                   
                    <div class="modal-body" id="profilBody">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                        <div class="modal-footer">
                           <table style="border-collapse: collapse; width: 100%;" border="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; text-align: right;" colspan="2">&nbsp;<button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Tutup</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
