<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      {{-- <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a> --}}
<h1>Jahidul Islam </h1>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="search-field d-none d-xl-block">
        <form class="d-flex align-items-center h-100" action="#">
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
            </div>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
          </div>
        </form>
      </div>
      <ul class="navbar-nav navbar-nav-right">

        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">

            </div>
            <div class="nav-profile-text">

              <p class="mb-1 text-black"> {{ Auth::user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
           <p> <x-responsive-nav-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-link></p>
        <form method="POST" action="{{ route('logout') }}" class="">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>

        </form>
          </div>

        </li>

      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
