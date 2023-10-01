<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function show(){
       // $id = Auth::user()->id;
        // $profile = Profile::where('user_id',$id)->first();
        //$user = Auth::user();
        $profile = User::with('profile')->where('id',auth()->user()->id)->get();
       // dd($profile);

        return view('client.show_profile');

    }

    public function edit(){
     //$profile = Profile::where('user_id',auth()->user()->id)->first();
     return view('client.edite_profile');


    }

    public function update(Request $request){
       // dd($request->all());
        $request->validate([
            'first_name' => ['required','string']
        ]);

        $request->merge(
            ['user_id' => auth()->user()->id]
        );
       // dd($request->all());
        Profile::updateOrCreate([
            'user_id' => auth()->user()->id
        ],$request->except(['_token','_method']));

        return redirect('client/show/profile');
    }
}
