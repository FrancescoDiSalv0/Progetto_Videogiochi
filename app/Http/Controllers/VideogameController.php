<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function videogameForm() {
        return view("vg.videogame_form");
    }


    public function videogameSubmit(Request $request){
        $videogame = Videogame::create(

            [
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'year' => $request->input('year'),
                'description' => $request->input('description'),
            ]


            );

    return redirect(route('welcome'));

        }

    public function videogameIndex(){
        $videogames = Videogame::all();
        return view('vg.videogame.index', compact('videogames'));
    }

}