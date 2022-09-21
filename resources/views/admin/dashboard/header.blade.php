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
  
  <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.css') }}">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/settings/favicon.png') }}">
  <link href=" {{ asset('dashboard/css/icon.css') }}" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard/vendors/vendors.min.css') }}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard/css/themes/dashboard.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard/css/themes/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('dashboard/css/style.css') }}">
  <style>
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
<!-- preloader start -->
{{-- <div class="preloader">
  <div class="box"></div>
  <div class="box2"></div>
</div> --}}
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed p-0"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light shadow">
          <div class="nav-wrapper">
            {{-- <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Enter Text" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div> --}}
            <ul class="navbar-list right">
              {{-- <li class="hide-on-med-and-down">
                <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li class="hide-on-large-only search-input-wrapper">
                <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i>
                </a>
              </li>
              <li>
                <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                  <i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a>
              </li> --}}
              <li>
                <a class="waves-effect waves-block waves-light profile-button" href="profile.html" data-target="profile-dropdown">
                  <span><b> {{ Auth::user()->name }} </b></span>
                  {{-- <span class="avatar-status avatar-online">
                    {{-- <img src=" {{ Auth::user()->profile_photo_url }}" alt="avatar"><i></i> --}}
                  {{-- </span>   --}}
                </a>
              </li>
            </ul>
            
            <!-- notifications-dropdown-->
            {{-- <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!">
                  <img src="{{ asset('dashboard/images/user/2.jpg ') }}" alt="img1" class="border-rounded" width="40" height="40">
                  <span class="not-dp-p"><b>Congratulation Sam 🎉 </b> winner!</span> 
                  <br><small class="notification-text"> Won the monthlybest seller badge.</small>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!">
                  <img src="{{ asset('dashboard/images/user/7.jpg ') }}" alt="img1" class="border-rounded" width="40" height="40">
                  <span class="not-dp-p"><b>New Message</b> Recived</span> 
                  <br><small class="notification-text"> You have 10 unread message</small>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!">
                  <img src="{{ asset('dashboard/images/user/4.jpg ') }}" alt="img1" class="border-rounded" width="40" height="40">
                  <span class="not-dp-p"><b>Revised Order 👋</b> Checkout</span> 
                  <br><small class="notification-text"> MD Inc. order updated</small>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!">
                  <img src="{{ asset('dashboard/images/user/9.jpg ') }}" alt="img1" class="border-rounded" width="40" height="40">
                  <span class="not-dp-p"><b>MD Inc. order updated</b>winner!</span> 
                  <br><small class="notification-text"> Won the monthlybest seller badge.</small>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!">
                  <img src="{{ asset('dashboard/images/user/10.jpg ') }}" alt="img1" class="border-rounded" width="40" height="40">
                  <span class="not-dp-p"><b>Server down</b> registered</span> 
                  <br><small class="notification-text"> USA Server is down due to hight CPU usage.</small>
                </a>
              </li>
            </ul> --}}
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li>
                <a class="grey-text text-darken-1" href="{{  url('user/profile') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                  <span class="menu-title-nav">Profile</span>
                </a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="me-50" data-feather="power"></i>Logout</a> --}}
                  <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg style="margin-left: 9px; margin-top: -10px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power mr-50"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line>
                    </svg> 
                    <span class="menu-title-nav">Logout</span>
                  </a>
                </form>
              </li>
            </ul>
          </div>
          {{-- <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav> --}}
        </nav>
      </div>
    </header>
    <!-- END: Header-->