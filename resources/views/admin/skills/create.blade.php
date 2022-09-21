@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Skills 
@endsection

{{-- menu active --}}
@section('skillsCreate')
    active
@endsection
@section('activeSkillMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Skill</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Skill</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label class="form-label" for="name">Skill Name </label>
                        <input type="text" id="name" class="form-control" name="name" >
                        @error('name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="percentage">Skill Percentage  (<=100)</label>
                        <input type="text" id="percentage" class="form-control" name="percentage">
                        @error('percentage')
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