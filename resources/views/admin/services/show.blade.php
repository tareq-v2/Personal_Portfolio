@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Services 
@endsection

{{-- menu active --}}
@section('serviceIndex')
    active
@endsection
@section('activeServiceMenu')
active
@endsection

{{-- content --}}
@section('content')

<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Show Service</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Service </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                               
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            Icon Link
                                                        </th>
                                                        <td>
                                                            {{ $service->icon }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Service Title
                                                        </th>
                                                        <td>
                                                            {{ $service->title }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Service Description
                                                        </th>
                                                        <td>
                                                            {{ $service->description }}
                                                        </td>
                                                    </tr>
                                                    
                                                     
                                                     
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('services.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('services.edit', $service->id) }}">Edit</a>
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