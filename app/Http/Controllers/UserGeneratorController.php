<?php

namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGeneratorController extends Controller
{
    /**
    * Responds to requests to GET /user-generator.
    */
    public function index() {
        return view('user-generator.user-generator');
    }
    
    /**
     * Responds to requests to POST /user-generator
     */
    public function store(Request $request) {
        $this->validate($request, [
            'numberOfUsers' => 'required|numeric|between:1,20'
        ]);
        $users = $request->input('numberOfUsers', '0');
        $birthdate = $request->input('birthdate');
        $phoneNumber = $request->input('phoneNumber');
        return view('user-generator.user-generator', ['numberOfUsers' => $users, 'birthdate' => $birthdate, 'phoneNumber' => $phoneNumber]);
    }
}