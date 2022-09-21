@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Experience 
@endsection

{{-- menu active --}}
@section('experiencesCreate')
    active
@endsection
@section('activExperienceMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Experience</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Experience</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label class="form-label" for="period">Experience Period </label>
                        <input type="text" id="period" class="form-control" name="period" placeholder="Jan, 2010 - Dec, 2022">
                        @error('period')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                    
                      <div class="form-group">
                        <label class="form-label" for="designation">Designation</label>
                        <input type="text" id="designation" class="form-control" name="designation" >
                        @error('designation')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                    
                      <div class="form-group">
                        <label class="form-label" for="organization">Organization</label>
                        <input type="text" id="organization" class="form-control" name="organization" >
                        @error('organization')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                    
                      <div class="form-group">
                        <label class="form-label" for="details">Details</label>
                        <textarea name="details" id="details" class="form-control"></textarea>
                        {{-- <input type="text" id="details" class="form-control" name="details" > --}}
                        @error('details')
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