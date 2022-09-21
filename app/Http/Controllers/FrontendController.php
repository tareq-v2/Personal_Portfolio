<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ColorSetting;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ExpertIn;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\TitleSetting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    // Home Page Method 
    public function index(){
        return view('frontend.index', [
            'banner'        => Banner::first(),
            'expert'        => ExpertIn::all(),
            'about'         => About::first(),
            'skills'        => Skill::all(),   
            'experiences'   => Experience::all(),
            'educations'    => Education::all(),
            'services'      => Service::all(),
            'category'      => Category::all(),
            'portfolio'     => Portfolio::all(),
            'testimonials'  => Testimonial::all(),
            'title'         => TitleSetting::first(),
            'setting'       => Setting::first(),
            'colors'        => ColorSetting::first(),
         ]);
    }
}
