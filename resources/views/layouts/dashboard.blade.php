<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head-->
<head>
         
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  {{-- data table --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  
  <link rel="stylesheet" href="{{ asset('dashboard_assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.css') }}">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/settings/favicon.png') }}">
  <link href=" {{ asset('dashboard_assets/css/icon.css') }}" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard_assets/vendors/vendors.min.css') }}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard_assets/css/themes/dashboard.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard_assets/css/themes/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard_assets/css/style.css') }}">
  <style>
    .trix-button--icon-attach, .trix-button-group--file-tools{
      display: none !important;
    }
    .table .navbar{
      position: relative;
      z-index: inherit;
    }
    .edit-btn{
      background:#17a2b8;
    }
    .edit-btn:hover{
      background:#17a2b8;
    }
    .dropdown-menu.show {
       left: 0 !important; 
}

  </style>

  @stack('css')
</head>
<!-- END: Head-->
<body >
 
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed p-0"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light shadow">
          <div class="nav-wrapper">
          
            <ul class="navbar-list right">
             
              <li>
                <a class="waves-effect waves-block waves-light profile-button" href="profile.html" data-target="profile-dropdown">
                  {{-- <span><b> Admin </b></span>  --}}
                  <span><b> {{ Auth::user()->name }} </b></span> 
                </a>
              </li>
            </ul>
            
           
            <ul class="dropdown-content" id="profile-dropdown">
              <li>
                {{-- <a class="grey-text text-darken-1" href="#"> --}}
                <a class="grey-text text-darken-1" href="{{  route('user.profile') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                  <span class="menu-title-nav">Profile</span>
                </a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                {{-- <form action="#"> --}}
                  @csrf
                  {{-- <a class="grey-text text-darken-1" href="#" onclick="event.preventDefault(); this.closest('form').submit();"> --}}
                  <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg style="margin-left: 9px; margin-top: -10px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power mr-50"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line>
                    </svg> 
                    <span class="menu-title-nav">Logout</span>
                  </a>
                </form>
              </li>
            </ul>
          </div>
   
        </nav>
      </div>
    </header>
    <!-- END: Header-->

    
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible">
        <div class="brand-sidebar">
          <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('dashboard') }}">
              <img class="hide-on-med-and-down " src="{{ asset('uploads/settings/favicon.png') }}" alt="materialize logo">
              {{-- <img class="hide-on-med-and-down " src="{{ asset('uploads/settings') }}/{{ generalSettings()->favicon }}" alt="materialize logo"> --}}
              <span class="logo-text hide-on-med-and-down text-dark" id="siteLogo">SoClose</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
          </h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
          <li class="navigation-header">
            <a class="navigation-header-text">Public View</a>
            <i class="navigation-header-icon material-icons ">more_horiz</i>
          </li>
          
          {{-- view website  --}}
          <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('home') }}" target="_blank">
              <i class="fas fa-eye sidenav-main__icon"></i>
              <span class="menu-title">View Website</span>
            </a>
          </li>
  
          <li class="navigation-header">
            <a class="navigation-header-text"> Apps & Pages </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
          </li>

          {{-- dashboard menu  --}}
          <li class="active bold">
             <a class="waves-effect waves-cyan @yield('dashboardIndex')" href="{{ route('dashboard') }}">
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
          <li class="bold ">
            <a class="waves-effect waves-cyan @yield('bannersIndex')" href="{{ route('banner.index') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag sidenav-main__icon"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
              <span class="menu-title">Banners</span>
            </a>
          </li>

          {{-- Expert menu  --}} 
          <li class="bold @yield('activeExpertMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
              <i class="fas fa-dumbbell sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="services">Expert In</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('expertin.index') }}" class="@yield('expertIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('expertin.create') }}" class="@yield('expertCreate')">
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

          {{-- skills Menu  --}}
          <li class="bold @yield('activeSkillMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"> 
              <i class="fas fa-fill-drip sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="services">Skills </span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('skills.index') }}" class="@yield('skillsIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                   <a href="{{ route('skills.create') }}" class="@yield('skillsCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li> 
              </ul>
            </div>
          </li>
         
          {{-- Experience Menu  --}}
          <li class="bold @yield('activExperienceMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"> 
              <i class="fab fa-buromobelexperte sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="services">Experiences </span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('experiences.index') }}" class="@yield('experiencesIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                   <a href="{{ route('experiences.create') }}" class="@yield('experiencesCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li> 
              </ul>
            </div>
          </li>

          {{-- Education Menu  --}}
          <li class="bold @yield('activEducationMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"> 
              <i class="fas fa-user-graduate sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="services">Education</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('educations.index') }}" class="@yield('educationsIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                   <a href="{{ route('educations.create') }}" class="@yield('educationsCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li> 
              </ul>
            </div>
          </li>

          {{-- Service Menu  --}}
          <li class="bold @yield('activeServiceMenu')">
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

          {{-- Category Menu --}}
          <li class="bold">
            <a class="waves-effect waves-cyan @yield('categoryIndex')" href="{{ route('categories.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase sidenav-main__icon"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
              <span class="menu-title">Category</span>
            </a>
          </li>

          {{-- Testimonial menu  --}}
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
 
          {{-- Portfolio Menu  --}}
          <li class="bold @yield('activePortfolioMenu')">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <i class="far fa-share-square sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Banners">Portfolio</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                   <a href="{{ route('portfolios.index') }}" class="@yield('portfoliosIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                   <a href="{{ route('portfolios.create') }}" class="@yield('portfoliosCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- Contact Message  --}}
          <li class="bold ">
            <a class="waves-effect waves-cyan @yield('messageIndex')" href="{{ route('message.index') }}">
              <i class="fas fa-sms sidenav-main__icon"></i>
              <span class="menu-title">Contact Messages</span>
            </a>
          </li>
        
          {{-- devider  --}}
          <li class="navigation-header">
            <a class="navigation-header-text"> Settings </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
        {{-- general settings menu  --}}
        <li class="bold ">
          <a class="waves-effect waves-cyan @yield('settingIndex')" href="{{ route('setting.index') }}"> 
            <i class="fas fa-cog sidenav-main__icon" ></i>
            <span class="menu-title">General Settings</span>
          </a>
        </li>
  
          {{-- Title settings menu  --}}
        <li class="bold ">
          <a class="waves-effect waves-cyan @yield('titleIndex')" href="{{ route('title.setting') }}"> 
            <i class="fas fa-cogs sidenav-main__icon"></i>
            <span class="menu-title">Title Settings</span>
          </a>
        </li>
          <li class="bold">
            <a class="waves-effect waves-cyan @yield('colorsIndex')" href="{{ route('colors.index') }}">
              <i class="fas fa-user-cog sidenav-main__icon"></i>
              <span class="menu-title" data-i18n="Support">Colors Setting</span>
            </a>
          </li>

      </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
      </aside>
      <!-- END: SideNav-->

      @yield('content')
      
    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static footer-light navbar-shadow">
        <div class="footer-copyright">
        <div class="container text-center">
            <span>COPYRIGHT © <?= date('Y') ?> <a href="https://soclose.co/" target="_blank"> SoClose, </a> All rights reserved.</span>
        </div>
        </div>
    </footer>
    <!-- END: Footer-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('dashboard_assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGES  JS-->
    <script src="{{ asset('dashboard_assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/search.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
    $(document).ready(function() {
    $('#datatables').DataTable();
    });
    </script>

@yield('js')
</body>
</html>