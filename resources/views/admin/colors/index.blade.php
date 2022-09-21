@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Colors 
@endsection

{{-- menu active --}}
@section('colorsIndex')
    active
@endsection
 

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Color Settings </span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Color Settings </h4>
                                @if (session('success'))
                                <br>
                                     <div class="alert alert-success m-0">{{ session('success') }}</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('colors.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf 
                                    <div class="form-group">
                                        <label for="theme_color">Theme Color</label>
                                        <input type="color" id="theme_color" class="form-control" name="theme_color" value="{{ $colors->theme_color }}">
                                        <input type="hidden" name="id" value="{{ $colors->id }}">
                                        @error('theme_color')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                      
                                    <div class="form-group">
                                        <label for="header_color">Header Background Color</label>
                                        <input type="color" id="header_color" class="form-control" name="header_color" value="{{ $colors->header_color }}">
                                        @error('header_color')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-admin mt-2">Update</button>
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