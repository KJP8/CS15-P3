<?php

namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PasswordGeneratorController extends Controller
{
    /**
    * Responds to requests to GET /password-generator
    */
    public function index() {
        return view('password-generator.password-generator');
    }
    
    /**
    * Responds to requests to POST /password-generator
    */
    public function store(Request $request) {
        $this->validate($request, [
            'numberOfWords' => 'required|numeric|between:2,10'                           
        ]);

        # Initialize variables
        $numWords = $request->input('numberOfWords', '4');
        $number = $request->input('number');
        $symbol = $request->input('symbol');
        $case = $request->input('case');
        $symbols = array('!','@','#','$','%','^','&','*','?','-');
        $errormsg = '';
        
        # Scrape html page for words between list elements.
        $source = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
        $doc = new \DOMDocument();
        @$doc->loadHTML($source);
        
        foreach ($doc->getElementsByTagName('li') as $li) {
                    $words[] = $li->nodeValue;
        }
        
        # Choose random words from the $words array based on the number provided by the user.
        $randArray = array_rand($words, $numWords);
        $valueArray = array();
        
        foreach ($randArray as $value) {
          $valueArray[] = $words[$value];
        }
        
        # Place a '-' between each word in the password.
        $password = join('-', $valueArray);
        $password = preg_replace('/\s+/', '', $password);
        
        # If option is selected by the user, make the password all uppercase.
        if (isset($case) && $case == 'up') {
          $password = strtoupper($password);
        }
        else {
          $password = strtolower($password);
        }
        
        # If option is selected by the user, append a random number to the end of the password.
        if (isset($number)) {
          $password = $password . rand(0, 9);
        }
        
        # If option is selected by the user, appent a random symbol to the end of the password.
        if (isset($symbol)) {
          $password = $password . $symbols[rand(0, count($symbols)-1)];
        }
        
        return view('password-generator.password-generator')->with('password',$password);
    }
}
    