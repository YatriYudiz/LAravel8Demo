<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        // echo "Welcome";
        return view('welcome');
    }

    // public function list() {

    //     return view('demo');
    // }

    public function list($name) {
        
        // return view('demo',['name' => $name]);

        return ['name' => 'yatri', 'department' => 'PHP'];
    }
}
