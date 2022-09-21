<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 

  <link rel="shortcut icon" href="{{ asset('uploads/settings') }}/{{ $setting->favicon }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.css') }}">
  <!-- main css -->
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/style.css') }}"> --}}
  @include('frontend.css')
  <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/responsive.css') }}">
 
  <title>{{ config('app.name') }}</title>
  <style>
    .portfolio-item-img img{
        height: 180px;
    }
  </style>

</head>
<body>

<!-- preloader start -->
<div class="preloader">
  <div class="box"></div>
  <div class="box2"></div>
  <div class="box3"></div>
</div>

<!-- Header start --> 
  <header class="header">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between">
        <div class="logo">
          <a href="index.html">P</a>
        </div>
        <div class="hamburger-btn outer-shadow hover-in-shadow ">
          <span></span>
        </div>
      </div>
    </div>
  </header>
<!-- Header end -->

<!-- desktop menu -->
<div class="top_nav desktop_menu">
    <nav class="nav_bar" id="navbar_top">
      <div class="px-5 logo align-self-center"><a href="{{ url('/') }}"><img width="70" id="navImage" src="{{ asset('uploads/settings') }}/{{ $setting->dark_logo }}" alt=""> </a></div>
      <div class="openMenu hamburger-btn"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu px-4">
          <li><a href="#home" class="link-item1 active">Home</a></li>
          <li><a href="#about" class="link-item1">about</a></li>
          <li><a href="#services" class="link-item1">services</a></li>
          <li><a href="#portfolio" class="link-item1">portfolio</a></li>
          <li><a href="#testimonial" class="link-item1">testimonial</a></li>
          <li><a href="#contact" class="link-item1">contact</a></li>    
        </ul>
    </nav>
  </div>

<!-- Navigation mobile menu start -->
<nav class="nav-menu mobile_menu">
  <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
  <div class="nav-menu-inner">
    <ul>
      <li><a href="#home" class="link-item outer-shadow hover-in-shadow active">Home</a></li>
      <li><a href="#about" class="link-item outer-shadow hover-in-shadow">about</a></li>
      <li><a href="#services" class="link-item outer-shadow hover-in-shadow">services</a></li>
      <li><a href="#portfolio" class="link-item outer-shadow hover-in-shadow">portfolio</a></li>
      <li><a href="#testimonial" class="link-item outer-shadow hover-in-shadow">testimonial</a></li>
      <li class="mb-5"><a href="#contact" class="link-item outer-shadow hover-in-shadow ">contact</a></li>
      <span class="icons">
        <a href="{{ $setting->facebook_link }}"><i class="fa fa-facebook outer-shadow hover-in-shadow"></i></a>
        <a href="{{ $setting->instagram_link }}"><i class="fa fa-instagram outer-shadow hover-in-shadow"></i></a>
        <a href="{{ $setting->twitter_link }}"><i class="fa fa-twitter outer-shadow hover-in-shadow"></i></a>
        <a href="{{ $setting->gitgub_link }}"><i class="fa fa-github outer-shadow hover-in-shadow"></i></a>
      </span>
    </ul>
  </div>
  <!-- copywrite text -->
  <p class="copywrite-text">&copy; <?= date('Y') ?>  <a href="https://soclose.co/" target="_blank"> SoClose, </a> All rights reserved.</p>
</nav>
<div class="fade-out-effect">
</div>
<!-- Navigation menu end -->

<section class="home-section section active" id="home">

  <!-- effect wrap start -->
  <div class="effect-wrap">
    <div class="effect effect-1"></div>
    <div class="effect effect-2"> 
      <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    </div>
    <!-- <div class="effect effect-3"></div> -->
    <div class="effect effect-4"></div>
    <div class="effect effect-5">
      <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    </div>
  </div>
  <!-- effect wrap end -->
  <div class="container" >
    <div class="row full-screen align-items-center" >
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mx-0 px-0">
        <div class="glowing">
          <span style="--i:1;"></span>
          <span style="--i:2;"></span>
          <span style="--i:3;"></span>
        </div>
        
        <div class="home-img">
          <div class="img-box">
            <img src=" {{ asset('uploads/banners') }}/{{ $banner->back_image }}" class="back_img" alt="profile-pic">
            <img src=" {{ asset('uploads/banners') }}/{{ $banner->main_image }}" class="main_img" alt="profile-pic">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-sm-2 order-md-0 mx-0 px-0 mt-5" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <div class="glowing">
          <span style="--i:1;"></span>
          <span style="--i:2;"></span>
          <span style="--i:3;"></span>
        </div>
        <div class="home-text">
          <p>{{ $banner->title }}</p>
          @php

              $name = explode(' ', $banner->name);
              $lastName = array_pop($name);
              $firstName = implode(' ', $name); 

          @endphp
          <h2>{{ $firstName }} <b>{{ $lastName }}</b></h2>
          <h1 class="pb-2">Exper In <span class="typing-text"> </span></h1>
          <p>{{ $banner->description }}</p>
          <a href="#about" class="link-item btn outer-shadow hover-in-shadow btn-1">{{ $banner->button_text }} <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- home section end -->

<!-- about section start -->
<section class="about-section section" id="about">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-heading="{{ $title->about_title }}________">{{ $title->about_subtitle }}</h2>
      </div>    
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="about-info p-0"> 
            <p>{!! $about->details !!}</p>
            <a target="_blank" href="{{ asset('uploads/abouts') }}/{{ $about->cv }}" class="btn btn-1 outer-shadow hover-in-shadow mr-3">Download CV <i class="fa fa-download" aria-hidden="true"></i></a>
            <a href="#contact" class="link-item btn btn-1 outer-shadow hover-in-shadow">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
        </div>
      </div> 
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="about-img">
          <div class="img-box1">
            <img src="{{ asset('uploads/abouts') }}/{{ $about->profile_image }}" class="" alt="profile-pic">
          </div>
          <!-- social links start -->
          <div class="social-links">
            <a href="{{ $setting->facebook_link }}" target="_blank" class="outer-shadow hover-in-shadow "><i class="fa fa-facebook"></i></a>
            <a href="{{ $setting->twitter_link }}" target="_blank" class="outer-shadow hover-in-shadow "><i class="fa fa-twitter"></i></a>
            <a href="{{ $setting->instagram_link }}" target="_blank" class="outer-shadow hover-in-shadow "><i class="fa fa-instagram"></i></a>
            <a href="{{ $setting->linkedin_link }}" target="_blank" class="outer-shadow hover-in-shadow "><i class="fa fa-linkedin"></i></a>
          </div>
          <!-- social links end -->
        </div>
      </div>
    </div>
    <!-- about tabs start -->
      <div class="row">
        <div class="about-tabs">
          <span class="tab-item outer-shadow active" data-target=".skills">skills</span>
          <span class="tab-item " data-target=".experience">experience</span>
          <span class="tab-item " data-target=".education">education</span>
        </div>
      </div>
      <!-- about tabs end -->
      <!-- skills start -->
      <div class="row mb-4 mx-0">
        <div class="skills tab-content mb-4 active">
          <div class="row" style="position:relative;">
            <!-- skill item start -->
            @foreach ($skills as $item) 
              <div class="col-lg-6" >
                <div class="skill-item">
                  <p>{{ $item->name }}</p>
                  <div class="progress-1 inner-shadow">
                    <div class="progress-bar-1" style="width: calc({{ $item->percentage }}% - 14px)">
                      <span>{{ $item->percentage }}%</span>
                    </div>
                  </div>
                </div>
              </div>  
            @endforeach
        
          <!-- skills item end -->
          </div>
        </div> 
      </div>
      <!-- skills end -->
      <!-- experience start -->
      <div class="row mx-0">
        <div class="experience tab-content">
          <div class="row">
            <div class="timeline">
              <div class="row">
                <!-- Timeline item start -->
                @foreach ($experiences as $item)
                <div class="timeline-item">
                  <div class="timeline-item-inner outer-shadow">
                    <i class="fa fa-briefcase icon"></i>
                    <span>{{ $item->period }}</span>
                    <h3>{{ $item->designation }}</h3>
                    <h4>{{ $item->organization }}</h4>
                    <p> {{ $item->details }}</p>
                  </div>
                </div>
                    
                @endforeach
                
                <!-- Timline item end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- experience end -->
      <!-- education start -->
      <div class="row mx-0">
        <div class="education tab-content">
          <div class="row">
            <div class="timeline">
              <div class="row">
                
                <!-- Timeline item start -->
                @foreach ($educations as $item)
                <div class="timeline-item">
                  <div class="timeline-item-inner outer-shadow">
                    <i class="fa fa-graduation-cap icon"></i>
                    <span>{{ $item->period }}</span>
                    <h3>{{ $item->program }}</h3>
                    <h4>{{ $item->institute }}</h4>
                    <p>{{ $item->details }}</p>
                  </div>
                </div>
                @endforeach
                <!-- Timeline item end -->  
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- education end -->
  </div>
</section>
<!-- about section end -->
  
<!-- services section start -->
<section class="service-section section" id="services">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-heading="{{ $title->service_title }}_________">{{ $title->service_subtitle }}</h2>
      </div>
    </div>
    <div class="row">
      <!-- service item start -->
        @foreach ($services as $item)
          <div class="col-md-6 col-lg-4" data-center-center="opacity:1;left:0px;" data-0-bottom="opacity:0;left:-400px;">
            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  {!! $item->icon !!} 
                </div>
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->description }}</p>
              </div>
            </div>
          </div>
        @endforeach 
      <!-- service item end --> 
  </div>
</section>
<!-- services section end -->

<!-- portfolio section start -->
<section class="portfolio-section section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-heading="{{ $title->portfolio_title }}_______________">{{ $title->portfolio_subtitle }}</h2>
      </div>
    </div>
    <!-- portfolio filter start -->
    <div class="row mb-4">
      <div class="portfolio-filter">
        <span class="filter-item outer-shadow active" data-target="all">all</span>
        @foreach ($category as $item)
        <span class="filter-item" data-target="{{ $item->id }}">{{ $item->name }}</span>
            
        @endforeach
        {{-- <span class="filter-item" data-target="graphic-design">graphic design</span>
        <span class="filter-item" data-target="mobile-app">mobile app</span>
        <span class="filter-item" data-target="photographer">photo grapher</span> --}}
      </div>
    </div>
    <!-- portfolio filter end -->

    <!-- portfolio items start -->
    <div class="row portfolio-items">
      <!-- portfolio item start -->
      @foreach ($portfolio as $item)
        <div class="portfolio-item" data-category="{{ $item->category_id }}" data-cat="{{ $item->getCategory->name }}">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('uploads/portfolio') }}/{{ $item->thum_image }}" alt="portfolio" 
              data-screenshots="{{ asset('uploads/portfolio') }}/{{ $item->preview_image }}">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">{{ $item->title }}</p>
            <!-- portfolio item details start -->
            <div class="portfolio-item-details">
              <div class="row">
                <div class="description">
                 <div class="details">
                  <h3>Project Brief:</h3>
                  <p>{{ $item->details }}</p>
                 </div>
                  <div class="info">
                    <h3>Project Info</h3>
                    <ul>
                      <li>Date - <span>{{ $item->date }}</span></li>
                      <li>Client - <span>{{ $item->client }}</span></li>
                      <li>Tools - <span>{{ $item->tools }}</span></li>
                      <li>Web - <span><a target="_blank" href="{{ $item->web_url }}">View website</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- portfolio item details end -->
          </div>
        </div>
      @endforeach
        {{-- <div class="portfolio-item" data-category="graphic-design">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-1.png') }}" alt="portfolio" 
              data-screenshots="img/portfolio/large/project-1/1.png,
              img/portfolio/large/project-1/1.png">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">Wedding Couple</p>
            <!-- portfolio item details start -->
            <div class="portfolio-item-details">
              <div class="row">
                <div class="description">
                  <h3>Project Brief:</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?</p>
                  <div class="info">
                    <h3>Project Info</h3>
                    <ul>
                      <li>Date - <span>2020</span></li>
                      <li>Client - <span>xyz</span></li>
                      <li>Tools - <span>html, css, jquery</span></li>
                      <li>Web - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- portfolio item details end -->
          </div>
        </div> --}}
      <!-- portfolio item end -->
    
      <!-- portfolio item start -->
        {{-- <div class="portfolio-item" data-category="photographer">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-2.png') }}" alt="portfolio" 
              data-screenshots="{{ asset("frontend_assets/img/portfolio/large/project-2/1.png") }}">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">Photo Grapher</p>
            <!-- portfolio item details start -->
            <div class="portfolio-item-details">
              <div class="row">
                <div class="description">
                  <h3>Project Brief:</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?</p>
                  <div class="info">
                    <h3>Project Info</h3>
                    <ul>
                      <li>Date - <span>2020</span></li>
                      <li>Client - <span>xyz</span></li>
                      <li>Tools - <span>html, css, bootstrap-4</span></li>
                      <li>Web - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- portfolio item details end -->
          </div>
        </div> --}}
      <!-- portfolio item end -->

     <!-- portfolio item start -->
        {{-- <div class="portfolio-item" data-category="web-application">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-2.png') }}" alt="web-application">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">Web Application</p>
          </div>
        </div> --}}
      <!-- portfolio item end -->

      <!-- portfolio item start -->
        {{-- <div class="portfolio-item" data-category="web-application">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-2.png') }}" alt="web-application">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">Web Application</p>
          </div>
        </div> --}}
      <!-- portfolio item end -->

      <!-- portfolio item start -->
        {{-- <div class="portfolio-item" data-category="web-application">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-3.png') }}" alt="portfolio" 
              data-screenshots="img/portfolio/large/project-3/1.png">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">fitness & gym</p>
            <!-- portfolio item details start -->
            <div class="portfolio-item-details">
              <div class="row">
                <div class="description">
                  <h3>Project Brief:</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?</p>
                  <div class="info">
                    <h3>Project Info</h3>
                    <ul>
                      <li>Date - <span>2020</span></li>
                      <li>Client - <span>xyz</span></li>
                      <li>Tools - <span>html, css, bootstrap-4</span></li>
                      <li>Web - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- portfolio item details end -->
          </div>
        </div> --}}
      <!-- portfolio item end -->
      <!-- portfolio item start -->
        {{-- <div class="portfolio-item" data-category="mobile-app">
          <div class="portfolio-item-inner outer-shadow">
            <div class="portfolio-item-img">
              <img src=" {{ asset('frontend_assets/img/portfolio/thumb/project-4.png') }}" alt="portfolio" 
              data-screenshots="img/portfolio/large/project-4/1.png,
              img/portfolio/large/project-4/2.png">
              <!-- view project btn -->
              <span class="view-project">view-project</span>
            </div>
            <p class="portfolio-item-title">mobile app</p>
            <!-- portfolio item details start -->
            <div class="portfolio-item-details">
              <div class="row">
                <div class="description">
                  <h3>Project Brief:</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?</p>
                  <div class="info">
                    <h3>Project Info</h3>
                    <ul>
                      <li>Date - <span>2020</span></li>
                      <li>Client - <span>xyz</span></li>
                      <li>Tools - <span>java, android</span></li>
                      <li>Play Store - <span><a href="#">xyz.play-store</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- portfolio item details end -->
          </div>
        </div> --}}
      <!-- portfolio item end -->
    </div>
    <!-- portfolio items end -->
  </div>
</section>
<!-- portfolio section end -->

<!-- testimonial section start -->
<section class="testimonial-section section" id="testimonial">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-heading="{{ $title->testimonial_title }}__________">{{ $title->testimonial_subtitle }}</h2>
      </div>
    </div>
    <div class="row">
      <div class="testi-box">
        <div class="testi-slider outer-shadow">
          <div class="testi-slider-container">
            <!-- testi item start -->
            @foreach ($testimonials as $item) 
              <div class="testi-item @if ($loop->index == 0) active @endif">
                <i class="fa fa-quote-left left"></i>
                <i class="fa fa-quote-right right"></i>
                <p>{{ $item->description }}</p>
                <img style="border-radius: 50%" src=" {{ asset('uploads/testimonials') }}/{{ $item->image }}" alt="testimonial" />
                <span>{{ $item->name }}</span>
              </div>  
            @endforeach
            
            <!-- testi item end -->
            <!-- testi item start -->
            {{-- <div class="testi-item">
              <i class="fa fa-quote-left left"></i>
              <i class="fa fa-quote-right right"></i>
              <p>Really great work. I would highly recommend working with him to anyone. He took the time to make sure it was what I wanted. (<small class="text-warning">⭐⭐⭐⭐⭐</small>)</p>
              <img src=" {{ asset('frontend_assets/img/testimonial/1.png') }}" alt="testimonial" />
              <span>Jatrahul68</span>
            </div> --}}
            <!-- testi item end -->
            <!-- testi item start -->
            {{-- <div class="testi-item">
              <i class="fa fa-quote-left left"></i>
              <i class="fa fa-quote-right right"></i>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil consequuntur doloremque quibusdam, sunt aut possimus earum. Aliquam tenetur molestiae. (<small class="text-warning">⭐⭐⭐⭐⭐</small>)</p>
              <img src=" {{ asset('frontend_assets/img/testimonial/1.png') }}" alt="testimonial" />
              <span>Tlawal</span>
            </div> --}}
            <!-- testi item end -->
          </div>
        </div>
        <div class="testi-slider-nav">
          <span class="prev outer-shadow hover-in-shadow"><i class="fa fa-angle-left"></i></span>
          <span class="next outer-shadow hover-in-shadow"><i class="fa fa-angle-right"></i></span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">    
  <div class="progress2 progress-moved">
    <div class="progress-bar2" >
    </div>                       
  </div> 
</div>
</section> 
<!-- testimonial section end -->

<!-- contact section start -->
<section class="contact-section section" id="contact">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-heading="{{ $title->contact_title }}________________">{{ $title->contact_subtitle }}</h2>
      </div>
    </div>
    <div class="row">
      <!-- contact item start -->
      <div class="contact-item">
        <div class="contact-item-inner outer-shadow">
          <i class="fa fa-phone"></i>
          <span>Phone</span>
          <p>{{ $setting->phone }}</p>
        </div>
      </div>
      <!-- contact item end -->
      <!-- contact item start -->
      <div class="contact-item">
        <div class="contact-item-inner outer-shadow">
          <i class="fa fa-envelope"></i>
          <span>Email</span>
          <p>{{ $setting->email }}</p>
        </div>
      </div>
      <!-- contact item end -->
      <!-- contact item start -->
      <div class="contact-item">
        <div class="contact-item-inner outer-shadow">
          <i class="fa fa fa-map-marker"></i>
          <span>Address</span>
          <p>{{ $setting->address }}</p>
        </div>
      </div>
      <!-- contact item end -->
    </div>
    <div class="contact-form">
      <div id="success"> </div>
      <form action="{{ route('message.store') }}" method="POST" id="summitForm">
        @csrf
        <div class="row">
          <div class="w-50">
            <span class="alert text-danger" id="nameError"> </span>
            <div class="input-group outer-shadow ">
              <input type="text" placeholder="Name" class="input-control" name="name" id="name"/>
            </div>
            <span class="alert text-danger" id="emailError"> </span>
            <div class="input-group outer-shadow ">
              <input type="email" placeholder="Email" class="input-control" name="email" id="email"/>
            </div>
            <span class="alert text-danger" id="subjectError"> </span>
            <div class="input-group outer-shadow">
              <input type="text" placeholder="Subject" class="input-control" name="subject" id="subject"/>
            </div>
          </div>
          <div class="w-50">
            <span class="alert text-danger" id="messageError"> </span>
            <div class="input-group outer-shadow">
              <textarea name="message" placeholder="Message" class="input-control" id="message"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="submit-btn">
            <button type="submit" id="submit" class="btn-1 outer-shadow hover-in-shadow">Send Message </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- contact section end -->

<!-- portfolio popup start -->
<div class="pp portfolio-popup">
  <div class="pp-details">
    <div class="pp-details-inner">
      <div class="pp-title">
        <h2>Personal Portfolio</h2>
        <p>Category - <span class="pp-project-category">Web Application</span></p>
      </div>
        <div class="pp-project-details">
        <div class="row">
          <div class="description">
            <h3>Project Brief:</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?</p>
          </div>
          <div class="info">
            <h3>Project Info</h3>
              <ul>
                <li>Date - <span>2020</span></li>
                <li>Client - <span>xyz</span></li>
                <li>Tools - <span>html, css, javascript</span></li>
                <li>Web - <span><a href="#">www.domain.com</a></span></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- separator -->
  <div class="separator"></div>
  <!-- separator -->

  <div class="pp-main">
    <div class="pp-main-inner">
      <div class="pp-project-details-btn outer-shadow hover-in-shadow">
        Project Details <i class="fa fa-plus"></i> 
      </div>
      <div class="pp-close outer-shadow hover-in-shadow">&times;</div>
      <img src=" {{ asset('frontend_assets/img/portfolio/large/project-1/1.png') }}" alt="pp" class="pp-img outer-shadow">
      <div class="pp-counter">1 of 6</div>
    </div>
    <div class="pp-loader">
      <div></div>
    </div>
    <!-- pp navigation -->
    <div class="pp-prev"><i class="fa fa-play"></i></div>
    <div class="pp-next"><i class="fa fa-play"></i></div>
  </div>
</div>
<!-- portfolio popup end -->

<!-- style switcher start - for demo purposse only -->
<div class="style-switcher outer-shadow">
  <div class="day-night s-icon outer-shadow hover-in-shadow" id="darkLight">
    <i class="fa fa-moon-o" ></i>
  </div>  
</div>
<!-- style switcher end -->

<!-- main js -->
<script src="{{ asset('frontend_assets/js/main.js') }}"></script>
<!-- style switcher js -->
<script src="{{ asset('frontend_assets/js/style-switcher.js') }}"></script>
<script src="{{ asset('frontend_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/popper.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script>
  var type = new Typed('.typing-text',{
  strings : [@foreach ($expert as $item )'{{ $item->name }}', @endforeach ],
  typeSpeed: 120,
  loop: true
});

$(document).ready(function(){

    // Submit Contact Form using ajax 
    $('#submit').click(function(e) {
        e.preventDefault();
        let name      = $('#name').val(); 
        let email     = $('#email').val();
        let subject   = $('#subject').val();
        let message   = $('#message').val();

        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        
        $.ajax({
            type: "POST",
            url: "{{ route('message.store') }}",
            data: {
                name    : name,
                email   : email, 
                subject : subject,
                message : message,
            },
            
            success: function (data) { 
                $('#summitForm').trigger('reset');
                $('#nameError').text('');
                $('#emailError').text(''); 
                $('#subjectError').text('');
                $('#messageError').text('');
                $('#success').html('<div class="alert alert-success"> Thanks for Contact Us</div>');
                // $('#error').css('display', 'none');
            },
            error: function(response){
                $('#nameError').text(response.responseJSON.errors.name);
                $('#emailError').text(response.responseJSON.errors.email); 
                $('#subjectError').text(response.responseJSON.errors.subject);
                $('#messageError').text(response.responseJSON.errors.message);
            } 
        }); 
    });
     
    // Change Nav Logo When Theme Mood Change 
    $('#darkLight').click(function(){
      if($('body').hasClass('dark')){
          $('#navImage').attr( "src","{{ asset('uploads/settings') }}/{{ $setting->white_logo }}");
      }
      else{
          $('#navImage').attr( "src", "{{ asset('uploads/settings') }}/{{ $setting->dark_logo }}");
      }
      // checkTheme();
    });

    //  Change Nav Logo Depends on Startup Theme mode  
    function checkTheme(){
      if($('body').hasClass('dark')){
          $('#navImage').attr( "src","{{ asset('uploads/settings') }}/{{ $setting->white_logo }}");
      }
      else{
          $('#navImage').attr( "src", "{{ asset('uploads/settings') }}/{{ $setting->dark_logo }}");
      }
    }
    checkTheme();
});
</script>
<!-- <script type="text/javascript" src="js/skrollr.js"></script>
<script type="text/javascript">
  var s = skrollr.init();
</script> -->


</body>
</html>









