@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Education 
@endsection

{{-- menu active --}}
@section('educationsIndex')
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
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Edit Education</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Education</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('educations.update', $education->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="period">Period</label>
                                        <input type="text" id="period" class="form-control" name="period" value="{{ $education->period }}">
                                        @error('period')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                     
                                    <div class="form-group">
                                        <label for="program">Program</label>
                                        <input type="text" id="program" class="form-control" name="program" value="{{ $education->program }}">
                                        @error('program')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                     
                                    <div class="form-group">
                                        <label for="institute">Institute</label>
                                        <input type="text" id="institute" class="form-control" name="institute" value="{{ $education->institute }}">
                                        @error('institute')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror
                                    </div> 
                                  
                                    <div class="form-group">
                                        <label for="details">Details</label>
                                         <textarea name="details" id="details" class="form-control"> {{ $education->details }}</textarea>
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