@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Title Settings
@endsection

{{-- Menu Active --}}
@section('titleIndex')
active
@endsection 
@section('content')

<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Title</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Title</h4>
                                <br>
                                @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                               
                            </div>
                            <div class="card-body">
                                <form action="{{ route('title.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="form-group">
                                        <label for="about_title">About Title</label>
                                        <input type="text" name="about_title" class="form-control" id="about_title" value="{{ $title->about_title }}">
                                        <input type="hidden" name="id" class="form-control" value="{{ $title->id }}">
                                        @error('about_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="about_subtitle">About subtitle</label>
                                        <input type="text" name="about_subtitle" class="form-control" id="about_subtitle" value="{{ $title->about_subtitle }}">
                                        @error('about_subtitle')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
            
                                    <div class="form-group">
                                        <label for="service_title">Service Title</label>
                                        <input type="text" name="service_title" class="form-control" id="service_title" value="{{ $title->service_title }}"> 
                                        @error('service_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="service_subtitle">Service Subtitle</label>
                                        <input type="text" name="service_subtitle" class="form-control" id="service_subtitle" value="{{ $title->service_subtitle }}">
                                        @error('service_subtitle')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
                                    <div class="form-group">
                                        <label for="portfolio_title">Portfolio Title</label>
                                        <input type="text" name="portfolio_title" class="form-control" id="portfolio_title" value="{{ $title->portfolio_title }}">
                                        <input type="hidden" name="id" class="form-control" value="{{ $title->id }}">
                                        @error('portfolio_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="portfolio_subtitle">Portfolio subtitle</label>
                                        <input type="text" name="portfolio_subtitle" class="form-control" id="portfolio_subtitle" value="{{ $title->portfolio_subtitle }}">
                                        @error('portfolio_subtitle')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
            
                                    <div class="form-group">
                                        <label for="testimonial_title">Testimonial Title</label>
                                        <input type="text" name="testimonial_title" class="form-control" id="testimonial_title" value="{{ $title->testimonial_title }}"> 
                                        @error('testimonial_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="testimonial_subtitle">Testimonial Subtitle</label>
                                        <input type="text" name="testimonial_subtitle" class="form-control" id="testimonial_subtitle" value="{{ $title->testimonial_subtitle }}">
                                        @error('testimonial_subtitle')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
            
                                    <div class="form-group">
                                        <label for="contact_title">Contact Title</label>
                                        <input type="text" name="contact_title" class="form-control" id="contact_title" value="{{ $title->contact_title }}"> 
                                        @error('contact_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_subtitle">Contact Subtitle</label>
                                        <input type="text" name="contact_subtitle" class="form-control" id="contact_subtitle" value="{{ $title->contact_subtitle }}">
                                        @error('contact_subtitle')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
            
                                    <br>
                                    <br>
                
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 
    
@endsection