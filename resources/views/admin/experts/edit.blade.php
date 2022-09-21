@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Expert 
@endsection

{{-- menu active --}}
@section('expertIndex')
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
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Expert Area</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Expert Area</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('expertin.update', $expertin->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Expert Area Name</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $expertin->name }}">
                                    @error('name')
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