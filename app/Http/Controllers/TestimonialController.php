<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'image'         => 'required|image',
            'description'   => 'required'
        ]);

        $testimonial = Testimonial::create($request->except('_token') + ['created_at' => Carbon::now()]);

        $image = $request->file('image');
        $fileName = $testimonial->id .'.'.$image->extension('image');
        $path = public_path('uploads/testimonials');
        $image->move($path, $fileName);
        $testimonial->image = $fileName;
        $testimonial->save();

        return redirect('admin/testimonials')->with('success', 'Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'          => 'required',
            'image'         => 'image',
            'description'   => 'required'
        ]);

        $testimonial->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->file('image')){ 
        $image = $request->file('image');
        $fileName = $testimonial->id .'.updated'.$image->extension('image');
        $path = public_path('uploads/testimonials');
        $image->move($path, $fileName);
        $testimonial->image = $fileName;
        $testimonial->save(); 
        }

        return redirect('admin/testimonials')->with('success', 'Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
