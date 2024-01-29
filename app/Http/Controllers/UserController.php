<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showuser()
    {
        return view('admin.user');
          
    }

    public function adduser(Request $request)
    {
     $users = new User; 
     $users ->name = $request->name;
     
     $users ->email = $request->email;
     $users ->password= $request->password;
    
    $result = $users ->save();

    if ($result) {
            // Return the stored data in JSON format
            return redirect()->route('user-list')->with('success,successfully inserted');
                } else {
            // Handle the case where TermsAndConditions creation failed
            return response()->json(['error' => 'Failed to save Users data'], 500);
        }

    }


    public function getbyall()
    {
        $users = User::all();
    
        if ( $users->isEmpty()) {
            return view('admin.user-list', ['user'=> []]);
        }           
        return view('admin.user-list', ['user'=> $users]);
    }

    public function getUser(Request $request)
    {
        $staffs = staff::where('id',$request->id)->first();
        return view('admin.staff-edit',compact('staffs'));
    }
}
