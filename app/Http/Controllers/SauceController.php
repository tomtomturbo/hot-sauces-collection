<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
public function showAll() {


       $sauces = Sauce::all()->sortByDesc('created_at');
       return view('messages', ['messages' => $sauces]);
    }}

