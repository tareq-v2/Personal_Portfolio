<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
        // Profile Route 
        public function Profile(){
            return view('admin.profile');
        }

        // update profile info 
        public function updateProfile(Request $request){
            $request->validate([
                'name'          => 'required', 
                'email'         => 'required|unique:users,email,'.Auth::user()->id,  
            ]);

            $user = User::find(Auth::id());
            $user->update($request->except('_token') + ['updated_at' => Carbon::now()]);
        

            if($request->file('profile_image')){
                $image = $request->file('profile_image');
                $fileName =$user->id.'.'.$image->extension('profile_image'); 
                $path = public_path('uploads/profile');
                $image->move($path, $fileName);
                $user->profile_image = $fileName;
                $user->update();
            }
            return back();
        }

        // update Password 
        public function updatePassword(Request $request){
            $request->validate([
                'old_password'          => 'required', 
                'new_password'          => 'required', 
                'confirm_new_password'  => 'required|same:new_password',
            ]);
            
            $user = User::find($request->id);
            $check = Hash::check($request->old_password, $user->password);
            if($check){
                $user->password = Hash::make($request->new_password);
                $user->save();
                return back()->with('success', 'Password Change Successfully');
            }
            else{
                return back()->with('fail', 'Current Passowrd Not Matched');
            }
        }
}
