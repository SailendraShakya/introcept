<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller {

	/**
     * Show the form to create a new record.
     *
     * @return Response
     */
	public function getIndex(){
		return view('form');
	}

	/**
     * Store a new record.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate and store the blog post...
        $this->validate($request, [
        'name' => 'required|max:255',
        'gender' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required|max:255',
        'nationality' => 'required|max:255',
        'date_of_birth' => 'required',
        'education' => 'required',
        'contact' => 'required|max:255',
    ]);
        die('testing');
    }
} 