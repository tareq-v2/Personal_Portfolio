<?php

namespace App\Http\Controllers;

use App\Models\ColorSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ColorSettingController extends Controller
{
    public function index(){
        $colors = ColorSetting::first();
        return view('admin.colors.index', compact('colors'));

    }


    public function update(Request $request){

        $request->validate([
            'theme_color'       => 'required',
            'header_color'      => 'required',
            
        ]);

        ColorSetting::find($request->id)->update($request->except('_token') + ['updated_at' => Carbon::now()]);
        return back()->with('success', 'Updated Successfully');
     
    }
}
