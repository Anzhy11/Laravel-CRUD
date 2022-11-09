<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;

class BasicController extends Controller
{
    
    //index method
    public function index()
    {
        return view('welcome');
    }

    // form create method
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the input fields
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        // Add new data to the database       
        $basic = new Basic;
            $basic->first_name = $request->firstname;
            $basic->last_name = $request->lastname;
            $basic->email = $request->email;
            $basic->phone = $request->phone;
            $basic->save();
            
            return redirect(route('home'))->with('successMsg','Student Successfully Added');
    }

}
