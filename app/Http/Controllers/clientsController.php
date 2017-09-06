<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientsController extends Controller {

	/**
     * Show the form to create a new record.
     *
     * @return Response
     */
	public function getIndex(){
        Log::info('Showing add client form for user.');
		return view('form');
	}

	/**
     * Show the list.
     *
     * @return Response
     */
	public function listing(){
        Log::info('Listing client for user');
		$file = file_get_contents("csv/data.csv");
		$data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
		return view('listing')->with('records', array_reverse($data));
	}

	/**
     * Store a new record.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::info('Validation rule for client');
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

    	$name = $request->input('name');
    	$gender = $request->input('gender');
    	$phone = $request->input('phone');
    	$email = $request->input('email');
    	$address = $request->input('address');
    	$nationality = $request->input('nationality');
    	$date_of_birth = $request->input('date_of_birth');
    	$education = $request->input('education');
    	$contact = $request->input('contact');
        Log::info('Getting value from form.');
		$cvsData = array($name,$gender,$phone,$email,$address,$nationality,$date_of_birth,$education,$contact);
		$file_name = public_path('csv/data.csv');
		$fp = fopen($file_name,"a");
		if($fp)
		{   
            Log::info('Adding client to csv file');
            fputcsv($fp, $cvsData);
            fclose($fp);
		}
        return redirect('client/listing');

    }
} 