<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function create(Request $request)
    {
        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $fullname = $last_name.$first_name;
        $form = $request->all();
        $params = [
            'fullname' => $fullname,
            'form' => $form,
        ];
        return view('contacts.store', $params);
    }
    
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, Contact::$rules);

        Contact::create([
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
        ]);
    }

    public function show()
    {
        return view('contacts.thanks');
    }
}
