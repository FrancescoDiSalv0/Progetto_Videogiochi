<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function videogameForm() {
        return view("vg.videogame_form");
    }
}
