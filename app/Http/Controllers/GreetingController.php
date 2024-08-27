<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreeting()
    {
        $name = 'John';  // Define the name variable
        return view('greet', ['name' => $name]);  // Pass the name to the view
    }
}