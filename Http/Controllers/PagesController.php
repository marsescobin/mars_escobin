<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function index() {
    $title = "This is Mars Escobin's space"; 
    return view('pages.index')->with('title', $title);
}

}
