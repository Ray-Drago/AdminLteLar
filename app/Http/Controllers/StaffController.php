<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Staff;


class StaffController extends Controller
{
    public function showstaff()
    {
        return view('admin.staff');
          
    }

    public function addstaff(Request $request)
{
    // Validate the request data, including the new 'image' field
    $request->validate([
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'password' => 'required|string',
        'whatsapp' => 'required|string',
        'email' => 'required|email',
        'nationality' => 'required|string',
        'language_speak' => 'required|string',
        'dob' => 'required|string',
        'highest_education' => 'required|string',
        'documentation' => 'required|string',
        'experience' => 'required|string',
        'terms_and_conditions_id' => 'required|string',
        'accepted_time' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('staff_images', 'public');
    }

    // Create a new staff instance
    $staff = new Staff;

    // Populate the staff instance with data
    $staff->name = $request->name;
    $staff->address = $request->address;
    $staff->phone = $request->phone;
    $staff->password = $request->password;
    $staff->whatsapp = $request->whatsapp;
    $staff->email = $request->email;
    $staff->nationality = $request->nationality;
    $staff->language_speak = $request->language_speak;
    $staff->dob = $request->dob;
    $staff->highest_education = $request->highest_education;
    $staff->documentation = $request->documentation;
    $staff->experience = $request->experience;
    $staff->terms_and_conditions_id = $request->terms_and_conditions_id;
    $staff->accepted_time = $request->accepted_time;
    $staff->image = $imagePath;

    // Save the staff instance to the database
    $result = $staff->save();

    if ($result) {
        // Return the stored data in JSON format
        return redirect()->route('staff-list')->with('success', 'Successfully inserted');
    } else {
        // Handle the case where Staff creation failed
        return response()->json(['error' => 'Failed to save Staff data'], 500);
    }
}



    public function getbyall()
    {
        $staffs = Staff::all();
    
        if ($staffs->isEmpty()) {
            return view('admin.staff-list', ['staff'=> []]);
        }           
        return view('admin.staff-list', ['staff'=> $staffs]);
    }

    public function getUser(Request $request)
    {
        $staffs = staff::where('id',$request->id)->first();
        return view('admin.staff-edit',compact('staffs'));
    }

    

    

    public function setActiveStatus(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        // Toggle the "active" status (if it's 1, set to 0; if it's 0, set to 1)
        $staff->active = !$staff->active;

        $staff->save();

        return redirect()->route('staff-list')->with('success', 'Staff status updated successfully');
    }
    
    



    
    public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'password' => 'required|string',
        'whatsapp' => 'required|string',
        'email' => 'required|email',
        'nationality' => 'required|string',
        'language_speak' => 'required|string',
        'dob' => 'required|string',
        'highest_education' => 'required|string',
        'documentation' => 'required|string',
        'experience' => 'required|string',
        'terms_and_conditions_id' => 'required|string',
        'accepted_time' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image upload
    ]);

    // Find the staff record by its ID
    $staff = Staff::findOrFail($id);

    // Update the staff record with the provided data
    $staffData = [
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
        'password' => $request->input('password'),
        'whatsapp' => $request->input('whatsapp'),
        'email' => $request->input('email'),
        'language_speak' => $request->input('language_speak'),
        'dob' => $request->input('dob'),
        'highest_education' => $request->input('highest_education'),
        'documentation' => $request->input('documentation'),
        'experience' => $request->input('experience'),
        'terms_and_conditions_id' => $request->input('terms_and_conditions_id'),
        'accepted_time' => $request->input('accepted_time'),
    ];

    // Check if an image was provided
    if ($request->hasFile('image')) {
        // Process and save the uploaded image
        $imagePath = $request->file('image')->store('staff_images', 'public');
        $staffData['image'] = $imagePath;
    }

    // Update the staff record
    $staff->update($staffData);

    // Redirect back to the staff list with a success message
    return redirect()->route('staff-list')->with('success', 'Staff updated successfully');
}



   

    public function destroy($id)
{
    $staffs =staff::where('id',$id)->first();
    $staffs ->delete();

    return back()->withSuccess(' Deleted  !!!');

      
}

}
