@extends('layouts.dashboard')
{{-- title --}}
@section('title')
    {{ config('app.name') }} | Edit Clients 
@endsection

{{-- menu active --}}
@section('clientsIndex')
    active
@endsection
@section('activeClientsMenu')
    active
@endsection
 
{{-- content --}}
@section('content')
<section class="banner-main-section py-5" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Edit Client</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Edit Client</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('clients.update', $client->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="first-name-vertical">Client URL</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="clients_url" value="{{ $client->clients_url }}">
                                    @error('clients_url')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-vertical"> Image</label>
                                    <input type="file" id="password-vertical" class="form-control" name="clients_logo">
                                    @error('clients_logo')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror 
                                    </div>
                                    <div class="mb-1">
                                        <img  class="w-25" src="{{ asset('uploads/clients')}}/{{ $client->clients_logo }}" alt=""> 
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