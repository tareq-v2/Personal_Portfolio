@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Education 
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
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Show Education</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Education </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            Period
                                                        </th>
                                                        <td>
                                                            {{ $education->period }}
                                                        </td>
                                                    </tr>                                
                                                                                
                                                    <tr>
                                                        <th>
                                                             Program 
                                                        </th>
                                                        <td>
                                                            {{ $education->program }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Institute 
                                                        </th>
                                                        <td>
                                                            {{ $education->institute }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Details 
                                                        </th>
                                                        <td>
                                                            {{ $education->details }}
                                                        </td>
                                                    </tr>                                
                                                                                
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('educations.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('educations.edit', $education->id) }}">Edit</a>

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