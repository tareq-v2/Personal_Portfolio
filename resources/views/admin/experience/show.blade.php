@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Experience 
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
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Show Experience</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Experience </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             Working Period
                                                        </th>
                                                        <td>
                                                            {{ $experience->period }}
                                                        </td>
                                                    </tr>                                
                                                                                
                                                    <tr>
                                                        <th>
                                                             Designation 
                                                        </th>
                                                        <td>
                                                            {{ $experience->designation }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Organization 
                                                        </th>
                                                        <td>
                                                            {{ $experience->organization }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Details 
                                                        </th>
                                                        <td>
                                                            {{ $experience->details }}
                                                        </td>
                                                    </tr>                                
                                                                                
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('experiences.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('experiences.edit', $experience->id) }}">Edit</a>

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