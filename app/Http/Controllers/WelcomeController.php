<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index(){
    $dog = 'gunther is cool';
    $cat = 'meow';
    return view('welcome', compact('dog', 'cat'));
  }
}
