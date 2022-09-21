<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    // Return Banner Data 
    public function index(){
        $banner = Banner::first();
        return view('admin.banners.index', compact('banner'));
    }

    // Update Banner Data 
    public function update(Request $request){

        $request->validate([
            'title'       => 'required', 
            'name'        => 'required', 
            // 'designation' => 'required', 
            'description' => 'required', 
            'button_text' => 'required', 
            'main_image'  => 'image', 
            'back_image'  => 'image', 
        ]);

        $banner = Banner::find($request->id);
        $banner->update($request->except('_token') + ['updated_at' => Carbon::now()]);
        
        // Main image upload if exist 
        if($request->file('main_image')){
            $image      = $request->file('main_image');
            $fileName   = 'main_image.' .$image->extension('main_image');
            $path       = public_path('uploads/banners');
            $image->move($path, $fileName);
            
            $banner->main_image = $fileName;
            $banner->save();
        }

        // Back image upload if exist 
        if($request->file('back_image')){
            $image      = $request->file('back_image');
            $fileName   = 'back_image.' .$image->extension('back_image');
            $path       = public_path('uploads/banners');
            $image->move($path, $fileName);
            
            $banner->back_image = $fileName;
            $banner->save();
        }
         return back()->with('success', 'Updated Successfully');

    }
}
