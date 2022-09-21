@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Services 
@endsection

{{-- menu active --}}
@section('servicesCreate')
    active
@endsection
@section('activeServiceMenu')
    active
@endsection
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Service</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Service</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label  for="icon">Icon Link</label>
                        <input type="text" id="icon" class="form-control" name="icon" placeholder="Enter Title">
                        @error('icon')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 
                      <div class="form-group">
                        <label  for="title">Service Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Enter Title">
                        @error('title')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 
                      <div class="form-group">
                        <label  for="description">Service Description</label>
                        <textarea name="description" id="description" class="form-control"> </textarea>
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