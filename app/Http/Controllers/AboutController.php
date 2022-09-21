<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    // Return about Index 
    public function index(){
        $about = About::first();
        return view('admin.abouts.index', compact('about'));
    }

    // Update About 
    public function update(Request $request){
        $request->validate([
            'details'       => 'required', 
            'profile_image' => 'image', 
            'cv'            => 'file | mimes:pdf,doc,docx', 
        ]);

        $about = About::find($request->id);
        $about->details = $request->details; 

        // Image upload if exist 
        if($request->file('profile_image')){
            $image = $request->file('profile_image');
            $filename = 'profile_image.'. $image->extension('profile_image');
            $path = public_path('uploads/abouts');
            $image->move($path, $filename);
            $about->profile_image = $filename;
        }

        // Image upload if exist 
        if($request->file('cv')){
            $cv = $request->file('cv');
            $filename = 'cv.'. $cv->extension('cv');
            $path = public_path('uploads/abouts');
            $cv->move($path, $filename);
            $about->cv = $filename;
        }

        $about->save();
        return back()->with('success', 'Updated Successfully');
    }
}
