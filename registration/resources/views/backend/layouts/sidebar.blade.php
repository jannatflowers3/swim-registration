<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
          <span class="menu-title">User</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{url('registrationbackend')}}">
          <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
          <span class="menu-title">Registration</span>
        </a>
      </li>

      <form method="POST" action="{{ route('logout') }}" class="pt-5">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>

    </form>
    </ul>
  </nav>
