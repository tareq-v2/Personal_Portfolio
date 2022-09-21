@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Portfolio
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
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Portfolio</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Portfolio</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('portfolios.update',$portfolio->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="form-label" for="category_id">Category Name</label>
                                        <Select class="form-control" name="category_id" id="category_id">
                                           
                                          <option selected value="{{ $portfolio->category_id }}"> {{ $portfolio->getCategory->name }} </option>
                                          
                                          @foreach ($category as $item)
                                            @if ($item->id == $portfolio->category_id)
                                                @continue
                                            @endif
                                          <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                          @endforeach
                                        </Select> 
                                        @error('category_id')
                                            <span class="text-danger"> {{ $message }} *</span>
                                        @enderror 
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="title">Title</label>
                                      <input type="text" id="title" class="form-control" name="title" value="{{ $portfolio->title }}">
                                      @error('title')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="details">Details</label>
                                      <textarea name="details" id="details" class="form-control"> {{ $portfolio->details }} </textarea>
                                       @error('details')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="date">Date</label>
                                      <input type="date" id="date" class="form-control" name="date" value="{{ $portfolio->date }}">
                                      @error('date')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="client">Client</label>
                                      <input type="text" id="client" class="form-control" name="client" value="{{ $portfolio->client }}"> 
                                      @error('client')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="tools">Tools</label>
                                      <input type="text" id="tools" class="form-control" name="tools" value="{{ $portfolio->tools }}">
                                      @error('tools')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="web_url">Website Url</label>
                                      <input type="text" id="web_url" class="form-control" name="web_url" value="{{ $portfolio->web_url }}">
                                      @error('web_url')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="thum_image">Thumbnail Image</label>
                                      <div class="custom-file  mb-2">
                                        <label for="thum_image" class="custom-file-label">Choose Thumbnail Image</label>
                                        <input type="file" id="thum_image" class="custom-file-input" name="thum_image">
                                      </div>
                                      <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->thum_image }}" width="140" alt="">
                                      @error('thum_image')
                                      <span class="text-danger"> {{ $message }} *</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-label" for="preview_image">Preview Image <a target="_blank" href="{{ asset('uploads/portfolio') }}/{{ $portfolio->preview_image }}"> View Preview Image</a></label>
                                      <div class="custom-file">
                                        <label for="preview_image" class="custom-file-label">Choose Preview Image</label>
                                        <input type="file" id="preview_image" class="custom-file-input" name="preview_image">
                                      </div>
                                      @error('preview_image')
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