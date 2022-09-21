<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request){
         $request->validate([
                'favicon'           => 'image', 
                'dark_logo'         => 'image', 
                'white_logo'        => 'image', 
                'address'           => 'required', 
                'email'             => 'required', 
                'phone'             => 'required', 
                'facebook_link'     => 'required', 
                'twitter_link'      => 'required', 
                'instagram_link'    => 'required', 
                'linkedin_link'     => 'required', 
                'gitgub_link'       => 'required', 
         ]);

         $setting = Setting::find($request->id)->first();
         $setting->update($request->except('_token') + ['updated_at' => Carbon::now()]); 
         
         $location = public_path('uploads/settings');
        //  update favicon 
         if($request->file('favicon')){
             $favicon = $request->file('favicon');
             $faviconName = $setting->id. 'favicon.' . $favicon->extension('favicon');
             $favicon->move($location, $faviconName);
             $setting->favicon = $faviconName;
             $setting->update();
             }

        //  update white logo 
         if($request->file('white_logo')){
             $white_logo = $request->file('white_logo');
             $whiteLogoName = $setting->id. 'white_logo.' . $white_logo->extension('white_logo');
             $white_logo->move($location, $whiteLogoName);
             $setting->white_logo = $whiteLogoName;
             $setting->update();
             }

        //  update Black logo 
         if($request->file('dark_logo')){
             $dark_logo = $request->file('dark_logo');
             $blackLogoName = $setting->id. 'dark_logo.' . $dark_logo->extension('dark_logo');
             $dark_logo->move($location, $blackLogoName);
             $setting->dark_logo = $blackLogoName;
             $setting->update();
             }

             return back()->with('success', 'Updated Successfully');
    }
}
