<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Posts;
class RestroController extends Controller
{
    public function index() {
        return view('home');
    }

    public function blogs() {
        $data = Posts::all();
        return view('blogs', ['data'=>$data]);
    }
}
