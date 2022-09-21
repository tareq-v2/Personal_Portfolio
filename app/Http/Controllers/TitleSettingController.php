<?php

namespace App\Http\Controllers;

use App\Models\TitleSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TitleSettingController extends Controller
{
    public function index(){
        $title = TitleSetting::first();
        return view('admin.titlesetting.index', compact('title'));
    }

    public function update(Request $request){
         $request->validate([
            'about_title'           => 'required',
            'about_subtitle'        => 'required', 
            'service_title'         => 'required',
            'service_subtitle'      => 'required', 
            'portfolio_title'       => 'required',
            'portfolio_subtitle'    => 'required', 
            'testimonial_title'     => 'required',
            'testimonial_subtitle'  => 'required', 
            'contact_title'         => 'required',
            'contact_subtitle'      => 'required', 
         ]);

         TitleSetting::find($request->id)->first()->update($request->except('_token') + ['updated_at' => Carbon::now()]);
         return back()->with('success', 'Updated Successfully');
    }
}
