<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // save message  
    public function saveMessage(Request $request){
    
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'subject'   => 'required',
            'message'   => 'required',
        ]);

        Message::create($request->except('_token') + ['created_at' => Carbon::now()]);

        return response('Message Save Successfully');

    }

    
    // show message  
    public function messsageShow(){
        $messages = Message::all();
        return view('admin.mesages.index', compact('messages'));
    }




    // Delete message  
    public function deleteMessage(Request $request){ 
        
        Message::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
