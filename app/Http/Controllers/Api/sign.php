<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class sign extends Controller
{
    public function sign(Request $request)
    {
        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            $msg = [
                'status'=>'nicew',
                'response'=>'created succecfully'
            ];
            
        } catch (\Exception $th) {
            $msg = $th->getMessage();
        }

        return response()->json($msg);
    }
}
