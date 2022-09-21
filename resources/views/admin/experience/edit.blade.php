@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Experience 
@endsection

{{-- menu active --}}
@section('experiencesIndex')
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
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Edit Experience</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Experience</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('experiences.update', $experience->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="period">Experience Period</label>
                                        <input type="text" id="period" class="form-control" name="period" value="{{ $experience->period }}">
                                        @error('period')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                     
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" id="designation" class="form-control" name="designation" value="{{ $experience->designation }}">
                                        @error('designation')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                     
                                    <div class="form-group">
                                        <label for="organization">Organization</label>
                                        <input type="text" id="organization" class="form-control" name="organization" value="{{ $experience->organization }}">
                                        @error('organization')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                  
                                    <div class="form-group">
                                        <label for="details">Details</label>
                                         <textarea name="details" id="details" class="form-control"> {{ $experience->details }}</textarea>
                                        @error('details')
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