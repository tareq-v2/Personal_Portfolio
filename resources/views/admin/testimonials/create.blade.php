@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Testimonials 
@endsection

{{-- menu active --}}
@section('testimonialsCreate')
    active
@endsection
@section('activeTestimonialsMenu')
    active
@endsection
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Testimonial</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Testimonial</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label for="first-name-vertical">Name </label>
                        <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file">
                          <input type="file" id="image" class="custom-file-input" name="image">
                          <label for="image" class="custom-file-label"> Choose Image</label>
                        </div>
                        @error('image')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror  
                      </div> 
                      <div class="form-group">
                        <label for="description"> Description </label>
                        <textarea name="description" id="description" placeholder="Enter Message" class="form-control"></textarea>
                        @error('description')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 
                      
                      <button type="submit" class="btn btn-admin">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection