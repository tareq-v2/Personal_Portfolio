
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible">
        <div class="brand-sidebar">
          <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('admin.dashboard') }}">
              <img class="hide-on-med-and-down " src="{{ asset('uploads/settings') }}/{{ generalSettings()->favicon }}" alt="materialize logo">
              <span class="logo-text hide-on-med-and-down text-dark">SoClose</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
          </h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
          <li class="navigation-header">
            <a class="navigation-header-text">Public View</a>
            <i class="navigation-header-icon material-icons ">more_horiz</i>
          </li>
          
          <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('home') }}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home sidenav-main__icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              <span class="menu-title">View Website</span>
            </a>
          </li>
  
          <li class="navigation-header">
            <a class="navigation-header-text"> Apps & Pages </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="active bold">
            <a class="waves-effect waves-cyan @yield('dashboardIndex')" href="{{ route('admin.dashboard') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users sidenav-main__icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
          </li>
          {{-- New User menu  --}} 
          <li class="bold @yield('activeUserMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
              <i class="fas fa-user sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Banners">Users</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('user.index') }}" class="@yield('usersIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('user.create') }}" class="@yield('usersCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li> 
              </ul>
            </div>
          </li>

          {{-- banner menu  --}}
          <li class="bold @yield('activeBannersMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
              <svg class="sidenav-main__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
              <span class="menu-title" data-i18n="Banners">Banners</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('banners.index') }}" class="@yield('bannersIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('banners.create') }}" class="@yield('bannersCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>

          {{-- about menu  --}}
          <li class="bold ">
            <a class="waves-effect waves-cyan @yield('aboutsIndex')" href="{{ route('abouts.index') }}">
              <i class="far fa-address-card sidenav-main__icon"></i>
              <span class="menu-title">Abouts</span>
            </a>
          </li>
          <li class="bold @yield('activeServicesMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag sidenav-main__icon"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
              <span class="menu-title" data-i18n="services">Services </span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('services.index') }}" class="@yield('servicesIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('services.create') }}" class="@yield('servicesCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="bold ">
            <a class="waves-effect waves-cyan @yield('choosesIndex')" href="{{ route('chooses.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase sidenav-main__icon"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
              <span class="menu-title">Choose</span>
            </a>
          </li>

          <li class="bold @yield('activeTestimonialsMenu')">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film sidenav-main__icon"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
              <span class="menu-title" data-i18n="Banners">Testimonials</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('testimonials.index') }}" class="@yield('testimonialsIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('testimonials.create') }}" class="@yield('testimonialsCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="bold @yield('activeClientsMenu')">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <i class="fas fa-users sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Banners">Clients</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('clients.index') }}" class="@yield('clientsIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('clients.create') }}" class="@yield('clientsCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="bold @yield('activeSocialsMenu')">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <i class="far fa-share-square sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Banners">Socials</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('socials.index') }}" class="@yield('socialsIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('socials.create') }}" class="@yield('socialsCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan @yield('titleSettingsIndex')" href="{{ route('titleSettings.index') }}" >
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings sidenav-main__icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              <span class="menu-title" data-i18n="Title">Title Setting</span>
            </a>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan @yield('settingsIndex')" href="{{ route('settings.index') }}">
              <i class="fas fa-cogs sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Support">General Setting</span>
            </a>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan @yield('colorsIndex')" href="{{ route('colors.index') }}">
              <i class="fas fa-user-cog sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Support">Colors Setting</span>
            </a>
          </li>
          <li class="bold ">
            <a class="waves-effect waves-cyan @yield('contactsIndex')" href="{{ route('contacts.index') }}">
              <i class="fas fa-sms sidenav-main__icon"></i>
              <span class="menu-title">Contact Messages</span>
            </a>
          </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
      </aside>
      <!-- END: SideNav-->