<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){

        for($i=0; $i<=6; $i++){

            $skillCount[]=Skill::whereDate('created_at', Carbon::now()->subDays($i))->get()->count();
            $days[]=Carbon::today()->subDays($i)->format('d-m');
            $messageCount[]=Message::whereDate('created_at', Carbon::now()->subDays($i))->get()->count();
            

        }

        return view('admin.index',[
            'service'       => Service::all(),
            'message'       => Message::all(),
            'testimonial'   => Testimonial::all(),
            'skill'         => Skill::all(),
            'skillCount'    => $skillCount,
            'messageCount'  => $messageCount,
            'days'          => $days,
            
        ]);
    } 

    
    // List all users 
    public function indexUser(){

    $users = User::where('id','!=', Auth::id())->get();
    return view('admin.user.index', compact('users'));
    }

    // create new user 
    public function createUser(){
        return view('admin.user.create');
    }

    // store user 
    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required', 
            'email' => 'required|unique:users', 
            'password' => 'required', 
            'confirm_password' => 'required|same:password',
        ]); 
        
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('admin/list-user')->with('success', "User Create Successfully");
    }

    public function deleteUser(Request $request){
        User::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');

    }
    
}
