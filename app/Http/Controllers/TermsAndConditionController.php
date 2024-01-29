<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsAndConditions;

class TermsAndConditionController extends Controller
{
    //
   

    public function showTerm()
    {
        return view('admin.terms');
          
    }

    public function addterm(Request $request)
    {
        // // Validate the request data
        // $validatedData =([
        //     'version_name' => 'required|string',
        //     'version_details' => 'nullable|string',
        //     'user_type' => 'required|in:staff,client',
        // ]);

        // $request->validate($validatedData);   
        // dd( $request);

        $terms = new TermsAndConditions;
        $terms->version_name = $request->version_name;
        $terms->version_details = $request->version_details;
        $terms->user_type = $request->user_type;
        // Save the TermsAndConditions instance to the database
        $result = $terms->save();
        // dd($result);
        if ($result) {
            // Return the stored data in JSON format
            return redirect()->route('term-list')->with('success,successfully inserted');
                } else {
            // Handle the case where TermsAndConditions creation failed
            return response()->json(['error' => 'Failed to save Terms and Conditions data'], 500);
        }

    }

    public function getbyall()
    {
        $termsAndConditions = TermsAndConditions::all();
    
        if ($termsAndConditions->isEmpty()) {
            return view('admin.list', ['termsAndConditions'=> []]);
        }           
        return view('admin.list', ['termsAndConditions'=> $termsAndConditions]);
    }

    
    public function getUser(Request $request)
    {
        $termsAndConditions = termsAndConditions::where('id',$request->id)->first();
        return view('admin.edit',compact('termsAndConditions'));
    }
    

    
    public function update(Request $request, $id)
    {
        // Validate the request data if needed
        $request->validate([
            'version_name' => 'required|string',
            'version_details' => 'required|string',
            'user_type' => 'required|string',
            // Add other validation rules as needed
        ]);
    
        // Find the terms and conditions record by its ID
        $termsAndConditions = TermsAndConditions::findOrFail($id);
    
        // Update the terms and conditions record
        $termsAndConditions->update([
            'version_name' => $request->input('version_name'),
            'version_details' => $request->input('version_details'),
            'user_type' => $request->input('user_type'),
            // Add other fields as needed
        ]);
    
        // Redirect back to the edit view with a success message
        return redirect()->route('term-list')->with('success', 'Terms and conditions updated successfully');
    }

public function destroy($id)
{
    $termsAndConditions=termsAndConditions::where('id',$id)->first();
    $termsAndConditions->delete();

    return back()->withSuccess(' Deleted  !!!');

      
}
}
    


