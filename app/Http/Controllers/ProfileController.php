<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function userProfilePage(){
        return view("user.profile");
    }

    public function userProfileEdit(){
        return view("user.profile_edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUserProfileData(ProfileRequest $request)
    {
        $profile = Auth::user()->profile()->create(
            [
                'phone' => $request->phone,
                'description' => $request->description,
                'userimage'=> $request->has('userimage')  ?  $request->file('userimage')->store("public/img/")  : "public/img/Anonymous-2-512.jpeg",
            ]
        );
        return redirect(route("welcome"));
    }




    /**
     * Update the specified resource in storage.
     */
    public function UserProfileUpdate(Profile $profile, ProfileRequest $request){
        $profile->update(
            [
                $profile->phone = $request->phone,
                $profile->description = $request->description,
            ]
        );

        if($request->img){
            $profile->update(
                [
                    "img" => $request->file('img')->store('public/img')
                ]
            );
        }
        return redirect(route("user.profile"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}