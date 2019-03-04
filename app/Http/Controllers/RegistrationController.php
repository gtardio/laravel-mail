<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  public function index()
  {
    return view('registration.index');
  }

  public function saveNewRegistrationForm(Request $request)
  {
    $data =  $request->all();

    dd($data);
  }
}
