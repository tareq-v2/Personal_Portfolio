@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Education 
@endsection

{{-- menu active --}}
@section('educationsCreate')
    active
@endsection
@section('activEducationMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Education</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Education</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('educations.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label class="form-label" for="period">Period </label>
                        <input type="text" id="period" class="form-control" name="period" placeholder="Jan, 2010 - Dec, 2022">
                        @error('period')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                    
                      <div class="form-group">
                        <label class="form-label" for="program">Program</label>
                        <input type="text" id="program" class="form-control" name="program" >
                        @error('program')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                    
                      <div class="form-group">
                        <label class="form-label" for="institute">Institute</label>
                        <input type="text" id="institute" class="form-control" name="institute" >
                        @error('institute')
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