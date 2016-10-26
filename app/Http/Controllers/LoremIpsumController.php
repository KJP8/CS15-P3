<?php

namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    /**
    * Responds to requests to GET /lorem-ipsum.
    */
    public function index() {
        return view('lorem-ipsum.lorem-ipsum');
    }
    
    /**
     * Responds to requests to POST /lorem-ipsum
     */
    public function store(Request $request) {
        $this->validate($request, [
            'paragraphs' => 'required|numeric|between:1,20'
        ]);
        $paragraphs = $request->input('paragraphs', '0');
        return view('lorem-ipsum.lorem-ipsum')->with('paragraphs',$paragraphs);
    }
}