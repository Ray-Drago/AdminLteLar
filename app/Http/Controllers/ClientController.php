<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function showClients()
    {
        return view('admin.client');
          
    }

    public function addclient(Request $request)
    {
     $clients = new Client; 
     $clients->name = $request->name;
     $clients->email = $request->email;
     $clients->phone= $request->phone;
     $clients->password= $request->password;
     $clients->whatsapp= $request->whatsapp;
     $clients->occupation= $request->occupation;
     $clients->companyname= $request->companyname;
     $clients->terms_and_conditions_id= $request->terms_and_conditions_id;
     $clients->accepted_time= $request->accepted_time;

          $result = $clients->save();

if ($result) {
            // Return the stored data in JSON format
            return redirect()->route('client-list')->with('success,successfully inserted');
                } else {
            // Handle the case where TermsAndConditions creation failed
            return response()->json(['error' => 'Failed to save Client data'], 500);
        }

    }

    public function getbyall()
    {
        $clients = Client::all();
    
        if ($clients->isEmpty()) {
            return view('admin.client-list', ['client'=> []]);
        }           
        return view('admin.client-list', ['client'=> $clients]);
    }

    public function getUser(Request $request)
    {
        $clients = client::where('id',$request->id)->first();
        return view('admin.client-edit',compact('clients'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data if needed
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'password' => 'required|string',
            'whatsapp' => 'required|string',
            'occupation' => 'required|string',
            'companyname' => 'required|string',
            'terms_and_conditions_id' => 'required|string',
            'accepted_time' => 'required|string',
        ]);
    
        // Find the terms and conditions record by its ID
        $clients = Client::findOrFail($id);
    
        // Update the terms and conditions record
        $clients->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
            'whatsapp' => $request->input('whatsapp'),
            'occupation' => $request->input('occupation'),
            'companyname' => $request->input('companyname'),
            'terms_and_conditions_id' => $request->input('terms_and_conditions_id'),
            'accepted_time' => $request->input('accepted_time'),
            // Add other fields as needed
        ]);
    
        // Redirect back to the edit view with a success message
        return redirect()->route('client-list', ['id' => $id])->with('success', 'Clients updated successfully');
    }


    public function destroy($id)
{
    $clients=client::where('id',$id)->first();
    $clients->delete();

    return back()->withSuccess(' Deleted  !!!');

      
}

}
