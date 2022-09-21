@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | general Settings
@endsection

{{-- Menu Active --}}
@section('settingIndex')
active
@endsection 
@section('content')

<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Settings</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Setting</h4>
                                <br>
                                @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                             
                            </div>
                            <div class="card-body">
                                <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf 

                                    <input type="hidden" name="id" class="form-control" value="{{ $setting->id }}">
                                    
                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="favicon"  name="favicon" value="{{ $setting->favicon }}">
                                            <label class="custom-file-label" for="favicon">Choose a Favicon</label>
                                        </div>
                                        @error('favicon')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
                                    <div class="from-group">
                                        <img src="{{ asset('uploads/settings') }}/{{ $setting->favicon }}" alt="" width="200">
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="white_logo">white Logo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="white_logo"  name="white_logo" value="{{ $setting->white_logo }}">
                                            <label class="custom-file-label" for="white_logo">Choose a White Logo</label>
                                        </div>
                                        @error('white_logo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
                                    <div class="from-group">
                                        <img src="{{ asset('uploads/settings') }}/{{ $setting->white_logo }}" alt="" width="200">
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="dark_logo">Black Logo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="dark_logo"  name="dark_logo" value="{{ $setting->dark_logo }}">
                                            <label class="custom-file-label" for="dark_logo">Choose a Black Logo</label>
                                        </div>
                                        @error('dark_logo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
                                    <div class="from-group">
                                        <img src="{{ asset('uploads/settings') }}/{{ $setting->dark_logo }}" alt="" width="200">
                                    </div> 
                                    <div class="form-group">
                                        <label for="address">Address </label>
                                        <input type="text" name="address" class="form-control" id="address" value="{{ $setting->address }}"> 
                                        @error('address')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="email">Email </label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{ $setting->email }}"> 
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="phone">Phone </label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{ $setting->phone }}"> 
                                        @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> 
                                 
                                    <div class="form-group">
                                        <label for="facebook_link">Facebook Link</label>
                                        <input type="text" name="facebook_link" class="form-control" id="facebook_link" value="{{ $setting->facebook_link }}"> 
                                        @error('facebook_link')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="twitter_link">Twitter Link</label>
                                        <input type="text" name="twitter_link" class="form-control" id="twitter_link" value="{{ $setting->twitter_link }}"> 
                                        @error('twitter_link')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="instagram_link">Instagram Link</label>
                                        <input type="text" name="instagram_link" class="form-control" id="instagram_link" value="{{ $setting->instagram_link }}"> 
                                        @error('instagram_link')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="linkedin_link">Linkedin Link</label>
                                        <input type="text" name="linkedin_link" class="form-control" id="linkedin_link" value="{{ $setting->linkedin_link }}"> 
                                        @error('linkedin_link')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="gitgub_link">Github Link</label>
                                        <input type="text" name="gitgub_link" class="form-control" id="gitgub_link" value="{{ $setting->gitgub_link }}"> 
                                        @error('gitgub_link')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                 
            
                                    <br>
                                    <br>
                
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 
    
@endsection