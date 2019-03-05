<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Mail\SendNewLead;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
  public function index()
  {
    return view('registration.index');
  }

  public function saveNewRegistrationForm(Request $request)
  {
    $data =  $request->all();

    $newLead = new Lead;

    $newLead->name =  $data['name'];
    $newLead->email =  $data['email'];
    $newLead->message =  $data['message'];

    $newLead->save();

    $message = 'Hai inserito i dati correttamente, ti contatteremo a breve';

    Mail::to('Gianluca.Tardio@gmail.com')->send(new SendNewLead($newLead));

    return view('registration.index', compact('message'));
  }
}
