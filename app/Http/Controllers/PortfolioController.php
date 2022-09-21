<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.portfolios.create', compact('category'));
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

            'category_id'       => 'required', 
            'title'             => 'required', 
            'details'           => 'required', 
            'date'              => 'required', 
            'client'            => 'required', 
            'tools'             => 'required', 
            'web_url'           => 'required', 
            'thum_image'        => 'required|image', 
            'preview_image'     => 'required|image', 
        ]);
        $portfolio = Portfolio::create($request->except('_token') + ['created_at' => Carbon::now()]);
        
        // Thum image save
        $path = public_path('uploads/portfolio');
        
        $thum_image = $request->file('thum_image');
        $thumName = $portfolio->id. 'thum_image.' .$thum_image->extension('thum_image');
        $thum_image->move($path, $thumName);
        $portfolio->thum_image = $thumName;

        // Preview image save
        $preview_image = $request->file('preview_image');
        $prevName = $portfolio->id. 'preview_image.' .$preview_image->extension('preview_image'); 
        $preview_image->move($path, $prevName);
        $portfolio->preview_image = $prevName;

        $portfolio->save();
 
        return redirect('admin/portfolios')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $category= Category::all();
        return view('admin.portfolios.edit', compact('portfolio', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([

            'category_id'       => 'required', 
            'title'             => 'required', 
            'details'           => 'required', 
            'date'              => 'required', 
            'client'            => 'required', 
            'tools'             => 'required', 
            'web_url'           => 'required', 
            'thum_image'        => 'image', 
            'preview_image'     => 'image', 
        ]);
        
        $portfolio->update($request->except('_token') + ['updated_at' => Carbon::now()]);
        
        // Thum image save if Exist
        $path = public_path('uploads/portfolio');
        
       if($request->file('thum_image')){

        $thum_image = $request->file('thum_image');
        $thumName = $portfolio->id. 'thum_image.' .$thum_image->extension('thum_image');
        $thum_image->move($path, $thumName);
        $portfolio->thum_image = $thumName;
        $portfolio->save();
       }

        // Preview image save if Exist
       if($request->file('preview_image')){

        $preview_image = $request->file('preview_image');
        $prevName = $portfolio->id. 'preview_image.' .$preview_image->extension('preview_image'); 
        $preview_image->move($path, $prevName);
        $portfolio->preview_image = $prevName; 
        $portfolio->save();
       }
 
        return redirect('admin/portfolios')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
