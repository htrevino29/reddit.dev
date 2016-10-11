<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function uppercase($word = 'word') {
    	$data['word'] = $word;
    	$data['uppercasedWord'] = strtoupper($word);
    	return view('uppercase')->with($data);       
	}

	public function increment ($number = 0) {
  
   		return $number + 1;
   	}
}
