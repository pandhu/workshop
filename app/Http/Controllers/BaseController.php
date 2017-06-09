<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class BaseController extends Controller
{
    public function showHome(){
        return view('home');
    }

    public function testInput($input, Request $request){
        var_dump($request->input());
    }

    public function storeMessage(Request $request){
        $messageObj = new Message;
        $messageObj->name = $request->input('name');
        $messageObj->email = $request->input('email');
        $messageObj->phone = $request->input('phone');
        $messageObj->message = $request->input('message');
        $messageObj->save();
    }

    public function showMessage(){
        $messages = Message::all();
        $data = ['messages' => $messages];
        return view('messages', $data);
    }
}
