<?php

namespace App\Http\Controllers;

use App\Models\Profile; 
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function create(){
      return view('profiles.create');
   }

   public function store(Request $request){
      $data =  $request->validate([
         'characters' => 'required',
         'role' => 'required',
         'location' => 'required',
      ]);


      $newProfile = Profile::create($data);
      return redirect()->route('profiles.create')->with('success', 'Profile created successfully');

   }
   public function index()
   {
       $profiles = Profile::all();
       return view('profiles.index', compact('profiles'));
   }
   
}
