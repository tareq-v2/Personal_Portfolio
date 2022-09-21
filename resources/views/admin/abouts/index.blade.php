@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Abouts
@endsection

{{-- menu active --}}
@section('aboutsIndex')
    active
@endsection


{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> About </span></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">About </h4>
                                    @if (session('success'))
                                    <br>
                                         <div class="alert alert-success m-0">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('abouts.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf  
                                        <div class="form-group">
                                            <label for="details">Description</label>
                                            <input type="hidden" name="id" value="{{ $about->id }}">
                                            <input id="details" type="hidden" name="details" value="{{ $about->details }}">
                                            <trix-editor input="details"></trix-editor>
                                            @error('details')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="cv">CV Upload</label><a target="_blank"  style="background-color: white; padding:0; font-size: 12px; margin-left: 10px" href="{{ asset('uploads/abouts') }}/{{ $about->cv }}"> View CV</a>
                                            <div class="custom-file">
                                                <input type="file" id="cv" class="custom-file-input" name="cv">
                                                <label for="cv" class="custom-file-label"> Choose Your CV</label>
                                            </div>

                                            @error('cv')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="profile_image">Image Upload</label>
                                            <div class="custom-file">
                                                <input type="file" id="profile_image" class="custom-file-input" name="profile_image">
                                                <label for="profile_image" class="custom-file-label">Choose Your Profile Image</label>
                                            </div>
                                            @error('profile_image')
                                                <span class="text-danger"> {{ $message }} *</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <img class="w-25" src="{{ asset('uploads/abouts') }}/{{ $about->profile_image }}" alt="">
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
