<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function store(Request $request)  
   {  
       // return $request->input();

      $request->session()->put('user', $request->input('username'));  
      echo $request->session()->get('user');
      //as array 
      // session(['user' => $request->input('username')]);  
      // $data = session('user');  
      // echo $data;    
   }

   public function retrievingSession(Request $request)
   {

      session(['user1'=>'anushka','age' => '20', 'subject' => 'php']);  
      session(['user2'=>'anvi']);  
      return $request->session()->all();

      // session()->flash('post', 'post has been updated');  
      // return $request->session()->get('post');    
   } 
}
