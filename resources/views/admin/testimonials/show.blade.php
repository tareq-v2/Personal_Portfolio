@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Testimonials 
@endsection

{{-- menu active --}}
@section('testimonialsIndex')
    active
@endsection
@section('activeTestimonialsMenu')
    active
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Show Testimonial</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Testimonial </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->name }}
                                                        </td>
                                                    </tr>                                
                                                                                    
                                                                                   
                                                    <tr>
                                                        <th>
                                                            Description
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->description }}
                                                        </td>
                                                    </tr>                                 
                                                    <tr>
                                                        <th>
                                                            Image
                                                        </th>
                                                        <td>
                                                            <img class="rounded-circle" width="100px" src="{{ asset('uploads/testimonials')}}/{{ $testimonial->image }}" alt="">
                                                        </td>
                                                    </tr>                                 
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('testimonials.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('testimonials.edit', $testimonial->id) }}">Edit</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection