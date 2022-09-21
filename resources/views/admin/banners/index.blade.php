@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Banners
@endsection

{{-- Menu Active --}}
@section('bannersIndex')
    active
@endsection 

{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Banner</span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Banner</h4>
                                    @if (session('success'))
                                    <br>
                                         <div class="alert alert-success m-0">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('banner.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf 

                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control" name="title" value="{{ $banner->title }}">
                                            <input type="hidden" name="id" value="{{ $banner->id }}">
                                            @error('title')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" name="name" value="{{ $banner->name }}">
                                            @error('name')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                      
                                        {{-- <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" id="designation" class="form-control" name="designation" value="{{ $banner->designation }}">
                                            @error('designation')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" id="description">{{ $banner->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div> 
                                      
                                        <div class="form-group">
                                            <label for="button_text">Button Text</label>
                                            <input type="text" id="button_text" class="form-control" name="button_text"
                                                value="{{ $banner->button_text }}">
                                            @error('button_text')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="back_image">Back Image</label>
                                            <input type="file" id="back_image" class="form-control" name="back_image">
                                            @error('back_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="mb-1">
                                            <img class="w-25" src="{{ asset('uploads/banners') }}/{{ $banner->back_image }}" alt="">
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="main_image">Main Image</label>
                                            <input type="file" id="main_image" class="form-control" name="main_image">
                                            @error('main_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="mb-1">
                                            <img class="w-25" src="{{ asset('uploads/banners') }}/{{ $banner->main_image }}" alt="">
                                        </div> 

                                        <button type="submit" class="btn btn-admin mt-4">Update</button>
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
