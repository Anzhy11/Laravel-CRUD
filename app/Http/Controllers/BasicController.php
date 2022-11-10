<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;

class BasicController extends Controller
{
    
    //index method
    public function index()
    {
        $basics = Basic::all(); //pull all data from basic database and save it to basics
        return view('welcome', compact('basics')); // pass the values to welcome page
    }

    // form create method
    public function create()
    {
        return view('create');
    }

    // Form submit method
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

    // Form edit method
    public function edit($id)
    {
        $basic = Basic::find($id); // find the with the passed id
        return view('edit', compact('basic')); // pass the values to edit page
    }

    // Database update method
    public function update(Request $request, $id)
    {
        // Validate the input fields
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
       
        $basic = Basic::find($id);
            $basic->first_name = $request->firstname;
            $basic->last_name = $request->lastname;
            $basic->email = $request->email;
            $basic->phone = $request->phone;
            $basic->save();

            return redirect(route('home'))->with('successMsg','Student Successfully Updated');
    }

    // Delete method
    public function delete($id)
    {
        Basic::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Student Deleted Successfully');
    }

}
