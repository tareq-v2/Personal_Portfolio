@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Category
@endsection

{{-- menu active --}}
@section('categoryIndex')
    active
@endsection

{{-- content --}}
@section('content')
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            <div class="col-12">
                <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title"> Category </span></h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Category <span data-toggle="modal" data-target="#add"> <small style="border: 1px solid; padding: 2px; cursor: pointer;">Add New</small> </span> </h4>
                                    @if (session('success'))
                                    <br>
                                         <div class="alert alert-success m-0">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive--custom">
                                                <table id="data_table" class="table table-bordered dataTable no-footer "    
                                                    role="grid" aria-describedby="data_table_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" rowspan="1" colspan="1"
                                                                style="width: 19.5156px;">Sl.</th>
                                                            <th class="sorting" rowspan="1" colspan="1"
                                                                style="width: 88.1406px;">Category Name</th> 
                                                            <th class="sorting" rowspan="1" colspan="1"
                                                                style="width: 59.3906px;">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                        @foreach ($categories as $item)
                                                        <tr role="row">
                                                            <td> {{ $loop->iteration }}</td>
                                                            <td>
                                                                <span class=""> {{ $item->name }} </span>
                                                            </td>  
                                                            <td>
                                                                <div class="navbar">
                                                                    <a href="#" id="navDropDownLink" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-more-vertical">
                                                                            <circle cx="12" cy="12" r="1"></circle>
                                                                            <circle cx="12" cy="5" r="1"></circle>
                                                                            <circle cx="12" cy="19" r="1"></circle>
                                                                        </svg>
                                                                    </a>
                                                                    <div class="dropdown-menu drp-menu"
                                                                        aria-labelledby="navDropDownLink">
                                                                        {{-- <a class="dropdown-item" href="{{ route('categories.show', $item->id) }}">
                                                                            <i class="far fa-eye"></i>
                                                                            <span>Show</span>
                                                                        </a> --}}
                                                                        <a class="dropdown-item" href="#" onclick="javascript:void(0)" data-toggle="modal" data-target="#edit{{ $item->id }}">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 mr-50">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg>
                                                                            <span>Edit</span>
                                                                        </a>
                                                                        <form class="dropdown-item" action="{{ route('categories.destroy', $item->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                            <button type="submit" class="btn text-dark p-0 m-0" style=" box-shadow:none; background:none">Delete</button>
                                                                        </form> 
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true" style="background: none; box-shadow:none; max-height:inherit">
                                                            <div class="modal-dialog modal-dialog-centered" role="document" >
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('categories.update', $item->id) }}" method="post" class="mt-1" enctype="multipart/form-data">
                                                                        @csrf 
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <label for="name">Category Name</label>
                                                                            <input type="text" name="name" class="form-control" id="name" value="{{ $item->name }}">  
                                                                            @error('name')
                                                                                    <span class="text-danger"> {{ $message }} *</span>
                                                                                @enderror 
                                                                        </div> 
                                                                </div>
                                                                <div class="modal-footer"> 
                                                                    <button type="submit" class="btn btn-primary"> Update </button>
                                                                </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
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

     {{-- modal for Add  --}}
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true" style="background: none; box-shadow:none; max-height:inherit">
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('categories.store') }}" method="post" class="mt-1" enctype="multipart/form-data">
                @csrf 
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder=" Enter Category Name">  
                    @error('name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror 
                </div> 
        </div>
        <div class="modal-footer"> 
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>
            </form>
        </div>
    </div>
</div>

@endsection
