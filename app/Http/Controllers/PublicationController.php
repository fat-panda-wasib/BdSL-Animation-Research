<?php

namespace App\Http\Controllers;

class PublicationController extends Controller
{
    public function index()
    {
        return view('publications.publications');
    }
}
