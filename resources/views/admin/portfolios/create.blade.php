@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Create Portfolio
@endsection

{{-- menu active --}}
@section('portfoliosCreate')
    active
@endsection
@section('activePortfolioMenu')
active
@endsection

{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Create Portfolio</span></h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Portfolio</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                      <div class="form-group">
                          <label class="form-label" for="category_id">Category Name</label>
                          <Select class="form-control" name="category_id" id="category_id">
                            <option value=""> Select Category</option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                            @endforeach
                          </Select> 
                          @error('category_id')
                              <span class="text-danger"> {{ $message }} *</span>
                          @enderror 
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title">
                        @error('title')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="details">Details</label>
                        <textarea name="details" id="details" class="form-control"></textarea>
                         @error('details')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="date">Date</label>
                        <input type="date" id="date" class="form-control" name="date">
                        @error('date')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="client">Client</label>
                        <input type="text" id="client" class="form-control" name="client">
                        @error('client')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="tools">Tools</label>
                        <input type="text" id="tools" class="form-control" name="tools">
                        @error('tools')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="web_url">Website Url</label>
                        <input type="text" id="web_url" class="form-control" name="web_url">
                        @error('web_url')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="thum_image">Thumbnail Image</label>
                        <div class="custom-file">
                          <label for="thum_image" class="custom-file-label">Choose Thumbnail Image</label>
                          <input type="file" id="thum_image" class="custom-file-input" name="thum_image">
                        </div>
                        @error('thum_image')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="preview_image">Preview Image</label>
                        <div class="custom-file">
                          <label for="preview_image" class="custom-file-label">Choose Preview Image</label>
                          <input type="file" id="preview_image" class="custom-file-input" name="preview_image">
                        </div>
                        @error('preview_image')
                        <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                        
                      <button type="submit" class="btn btn-admin">Submit</button>
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