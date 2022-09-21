@extends('layouts.dashboard')

@section('content')

<main class="profile-page all-page-input"><div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 flex justify-between">
                <div class="mb-3 profile-header-top">
                    <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>
                    <p class="mt-1 text-sm text-gray-600">Update your account's profile information and email address.</p>
                </div>
            </div>
            <div class="mt-0 md:mt-0 md:col-span-2">
                <form action="{{ route('profile.change') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Profile Photo -->
                            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden" id="photo" name="profile_image">
                                <label class="block font-medium text-sm text-gray-700">Photo
                                </label>
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    @if (Auth::user()->profile_image)

                                    <img src="{{ asset('uploads/profile') }}/{{ Auth::user()->profile_image }}" alt="Admin" class="rounded-full h-20 w-20 object-cover">
                                     
                                    @else
                                    <img src="{{ asset('dashboard_assets/images/admin-avatar.png') }}" alt="Admin" class="rounded-full h-20 w-20 object-cover">
                                    @endif
                                </div>
                                @error('profile_image')
                                    <span class="alert text-danger"> {{ $message }}</span>                                    
                                @enderror
                                <br>
                              <label  for="photo" class="border rounded-3 mt-3 p-1 px-5 rounded-lg text-dark">
                                   Select A New Photo 
                                </label>
                            </div>
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <div class="form-group">
                                    <label class="text-sm" for="name">Name</label>
                                    <input class="form-control" id="name" type="text" name="name" value="{{ Auth::user()->name }}">
                                    @error('name')
                                    <span class="alert text-danger"> {{ $message }}</span>                                    
                                    @enderror
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-span-6 sm:col-span-4">
                                <div class="form-group">
                                    <label class="text-sm" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email" value="{{ Auth::user()->email }}">
                                    @error('email')
                                    <span class="alert text-danger"> {{ $message }}</span>                                    
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Save</button>               
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-8">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
            
        <div class="mt-0 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0 prof-head-title">
                        <h3 class="text-lg font-medium text-gray-900">Update Password</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Ensure your account is using a long, random password to stay secure.
                        </p>
                    </div>
                </div>
                <div class="mt-0 md:mt-0 md:col-span-2">
                    <form action="{{ route('profile.password') }}" method="POST">
                        @csrf
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    @if (session('success')) 
                                         <span class="alert text-success m-0">{{ session('success') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <label class="text-sm" for="password">Current Password</label>
                                        <input class="form-control" id="currentPassword" type="password" name="old_password">
                                        <input type="hidden" name="id" value="{{ Auth::id() }}">
                                        @if (session('fail')) 
                                             <span class="alert text-danger m-0">{{ session('fail') }}</span>
                                        @endif
                                        @error('old_password')
                                        <span class="alert text-danger"> {{ $message }}</span>                                    
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <div class="form-group">
                                        <label class="text-sm" for="password">New Password</label>
                                        <input class="form-control" id="newPassword" type="password" name="new_password">
                                        @error('new_password')
                                        <span class="alert text-danger"> {{ $message }}</span>                                    
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <div class="form-group">
                                        <label class="text-sm" for="password">Confirm Password</label>
                                        <input class="form-control" id="confirmPassword" type="password" name="confirm_new_password">
                                        @error('confirm_new_password')
                                        <span class="alert text-danger"> {{ $message }}</span>                                    
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="hidden sm:block">
            <div class="py-8">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-0 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0 prof-head-title">
                        <h3 class="text-lg font-medium text-gray-900">Two Factor Authentication</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Add additional security to your account using two factor authentication.
                        </p>
                    </div>
                </div>
                <div class="mt-0 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900">
                            You have not enabled two factor authentication.
                        </h3>
                        <div class="mt-3 max-w-xl text-sm text-gray-600">
                            <p>When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
                            </p>
                        </div>
                        <div class="mt-5">
                            <span>
                                <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Enable</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-8">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
        
        <div class="mt-0 sm:mt-0">
            <div wire:id="DlAgGfbnGQfax7yidhJD" class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0 prof-head-title">
                        <h3 class="text-lg font-medium text-gray-900">Browser Sessions</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Manage and log out your active sessions on other browsers and devices.
                        </p>
                    </div>
                </div>
                <div class="mt-0 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl text-sm text-gray-600">
                        If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.</div>
                        <div class="mt-2 space-y-6">
                            <!-- Other Browser Sessions -->
                            <div class="flex items-center">
                                <div>
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                        <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm text-gray-600">
                                        Windows - Chrome
                                    </div>
                                <div>
                                <div class="text-xs text-gray-500">
                                    103.135.172.30,
                                    <span class="text-green-500 font-semibold">This device</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center mt-2">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:click="confirmLogout" wire:loading.attr="disabled">Log Out Other Browser Sessions</button>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-8">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
        </div>
        <div class="mt-0 sm:mt-0">
            <div wire:id="76yolW1lCwRMLVFVoCBd" class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0 prof-head-title">
                        <h3 class="text-lg font-medium text-gray-900">Delete Account</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Permanently delete your account.
                        </p>
                    </div>
                </div>
                <div class="mt-0 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl text-sm text-gray-600">
                        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</div>
                        <div class="mt-5">
                            <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" wire:click="confirmUserDeletion" wire:loading.attr="disabled">Delete Account</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>  --}}
    </div>
{{-- </div> --}}
</main>
    
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href=" {{ asset('dashboard_assets/css/themes/app.css') }}">  
<style>
    #siteLogo{
        margin-left: 30px;
    }
</style>
@endpush