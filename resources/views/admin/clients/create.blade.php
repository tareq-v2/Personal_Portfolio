@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Clients 
@endsection

{{-- menu active --}}
@section('clientsCreate')
    active
@endsection
@section('activeClientsMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Client</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Client</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                        <label class="form-label" for="image">Client Logo</label>
                        <input type="file" id="image" class="form-control" name="clients_logo">
                        @error('clients_logo')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                    </div>
                      <div class="form-group">
                        <label class="form-label" for="clients_url">Client URL</label>
                        <input type="text" id="clients_url" class="form-control" name="clients_url" placeholder="Enter URL">
                        @error('clients_url')
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