@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Users

@endsection
{{-- menu active --}}
@section('activeUserMenu')
    active
@endsection
 
@section('usersCreate')
    active
@endsection
 
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create User</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create New User</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label for="name">Name </label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email </label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="password">Password </label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
                        @error('password')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="c_password">Confirm Password </label>
                        <input type="password" id="c_password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password">
                        @error('confirm_password')
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