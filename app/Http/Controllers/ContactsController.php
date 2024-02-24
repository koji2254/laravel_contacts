<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_contacts()
    {

        try {

            // Check if the user is Authenticated
            // if(auth()->check()) {
            
              $contactList = Contacts::all();
            
              return response()->json(['contacts' => $contactList, 'status' => 'success']);
            // } else {
            //     // User is not Authenticated
            //     return response()->json(['status' => 'error', 'message' => 'User not authenticated']);
            // }
           
        }catch(\Exception $e){
            // Handle other exception
            return response()->json(['status' => 'error', 'message' => 'Somthing went worng']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_contact(Request $request )
    {
        $request->validate([
            'name' => ['required'],
            'email' => [''],
            'address' => [],
            'phone' => ['required'],
            'contact_id' => ['required'],
            'contact_user_id' => ['required'],
        ]);     

        $randomId = str_pad(random_int(10000, 99999), 5, '0', STR_PAD_LEFT);

        $contact = Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'contact_user_id' => $request->contact_user_id,
            'contact_id' => $randomId
        ]);

        return response()->json(['status' => 'success', 'contact' => $contact, 'contactList' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_contact($contact_id)
    {
        $contact = Contacts::where('contact_id', $contact_id)->get()->first();

        if(!$contact){
            return response()->json(['status' => 'failed', 'message' => 'No contact found']);
        }

        $contactList = Contacts::all();

        // return $this->success(['contacts' => $contactList]);
        return response()->json(['contact' => $contact, 'status' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_contact(Request $request, $contact_id)
    {
        $contact = Contacts::where('contact_id', $contact_id)->get()->first();

        if(!$contact){
            return response()->json(['status' => 'failed', 'message' => 'No contact found']);
        }

        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
        ]);

        // Filter the request data to exclude null values
        $updateData = array_filter($request->only(['name', 'email', 'phone', 'address']));
    
        // Update only the provided fields
        $contactUpdated = $contact->update($updateData);

        return response()->json(['status' => 'success','contact' => $contactUpdated]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_contact($contact_id)
    {
        $contact = Contacts::where('contact_id', $contact_id)->get()->first();

        if(!$contact){
            return response()->json(['status' => 'failed', 'message' => 'No contact found']);
        }

        $contact->delete();
        
        $contactList = Contacts::all();

        return response()->json(['status' => 'success','contactList' => $contactList]);

    }
}
