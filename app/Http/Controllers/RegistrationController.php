<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'mobile'=> 'required',
            'events'=> 'required'
        ]);

        $events = $request->input('events');
        foreach ((array)$events as $event) {
            if(!empty($event))
            {
                $cat_eve = explode('|', $event);
                Registration::create([
                'name' => $request->input('name'),
                'usn' => $request->input('usn'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'category' => $cat_eve[0],
                'event' => $cat_eve[1]
                ]);
            }
        }   
       
        //Registration::create($request->all());

        return redirect('/')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

}
