@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create ExpertIn 
@endsection

{{-- menu active --}}
@section('expertCreate')
    active
@endsection
@section('activeExpertMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Expert Area</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Expert Area</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('expertin.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                     
                      <div class="form-group">
                        <label class="form-label" for="name">Expart Area Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter URL">
                        @error('name')
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