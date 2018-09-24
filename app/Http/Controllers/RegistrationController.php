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
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:255',
            'mobile'=> 'required|min:10|max:10',
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

        return view('success')->with('success', 'yes');
    }
}
