@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Show Portfolio
@endsection

{{-- menu active --}}
@section('portfoliosIndex')
    active
@endsection
@section('activePortfolioMenu')
    active
@endsection
{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Show Portfolio</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Portfolio </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            Category Name 
                                                        </th>
                                                        <td>
                                                            {{  $portfolio->getCategory->name  }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Portfolio Title
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->title }}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Portfolio Details
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->details }}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->date}}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Client 
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->client }}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Portfolio Tools
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->tools }}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                           Website Url
                                                        </th>
                                                        <td>
                                                            {{ $portfolio->web_url }}
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Thumbnail Image
                                                        </th>
                                                        <td>
                                                            <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->thum_image }}" width="130" alt="">
                                                        </td>
                                                    </tr>                                    
                                                    <tr>
                                                        <th>
                                                            Preview Image
                                                        </th>
                                                        <td>
                                                            <a target="_blank" href="{{ asset('uploads/portfolio') }}/{{ $portfolio->preview_image }}">Veiw Preview Image</a> 
                                                        </td>
                                                    </tr>                                    
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1" href="{{ route('portfolios.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1" href="{{ route('portfolios.edit', $portfolio->id) }}">Edit</a>

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