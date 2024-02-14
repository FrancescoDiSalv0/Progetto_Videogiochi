<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideogameRequest;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideogameController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth")->except("videogameIndex", "videogameDetail");
    }

    public function videogameForm() {
        return view("vg.videogame_form");
    }


    public function videogameSubmit(VideogameRequest $request){
        
        // $user = Auth::user();

        // $videogame = Videogame::create(
        $videogame = Auth::user()->videogames()->create(

            [
                'title' => $request->input('title'),
                // 'author' => $request->input('author'),
                'year' => $request->input('year'),
                'description' => $request->input('description'),
                'img' => $request->file('img') ? $request->file('img')->store('public/img') : "public/img/Anonymous-2-512.jpeg"
            ]

            );

    return redirect(route('welcome'));

        }

    public function videogameIndex(){
        $videogames = Videogame::all();
        return view('vg.videogame_index', compact('videogames'));
    }

    public function videogameDetails(Videogame $videogame){
        return view("vg.videogame_details", compact("videogame"));
    }

    public function videogameEdit(Videogame $videogame){
        return view("vg.videogame_edit", compact("videogame"));
    }

    public function videogameUpdate(Videogame $videogame, VideogameRequest $request){
        $videogame->update(
            [
                $videogame->title = $request->title,
                // $videogame->author = $request->author,
                $videogame->year = $request->year,
                $videogame->description = $request->description,

            ]
        );

        if($request->img){
            $videogame->update(
                [
                    "img" => $request->file('img')->store('public/img')
                ]
            );
        }
        return redirect(route("videogame.index"));
    }

    public function videogameDestroy(Videogame $videogame){
        $videogame->delete();
        return redirect(route('videogame.index'));
    }

}