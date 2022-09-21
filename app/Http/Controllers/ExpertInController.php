<?php

namespace App\Http\Controllers;

use App\Models\ExpertIn;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpertInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = ExpertIn::all();
        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experts.create');
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
            'name' => 'required', 
        ]);

        ExpertIn::create($request->except('_token') + ['created_at' => Carbon::now()]);
        return redirect('admin/expertin')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpertIn  $expertIn
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertIn $expertIn)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertIn  $expertIn
     * @return \Illuminate\Http\Response
     */
    public function edit($expert)
    {
        $expertin =ExpertIn::find($expert) ;
        return view('admin.experts.edit', compact('expertin')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpertIn  $expertIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $expert)
    {
        $request->validate([
            'name' => 'required', 
        ]);  
        $data = ExpertIn::find($expert);
        $data->name = $request->name;
        $data->save();

        return redirect('admin/expertin')->with('success', 'Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertIn  $expertIn
     * @return \Illuminate\Http\Response
     */
    public function destroy($expert)
    {
         ExpertIn::find($expert)->delete();
        return back()->with('success', 'Delete Successfully');
    }
}
