<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class userControllers extends Controller
{
    //
    public function in(Request $request){

        dd($request ->all());

       
    }

    public function register(Request $request){

        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required',
            'finger_id' => 'required|unique:users'
        ]);

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone = $request->phone;
        $address = $request->address;
        $finger_id = $request->finger_id;
        
       if(Users::register($first_name, $last_name, $phone, $address, $finger_id)):
        return json_encode(['suuccess' => true, 'message'=> $first_name . ' ' . $last_name . ' Successfully registered']);
       endif;

    }
}
