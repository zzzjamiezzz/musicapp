<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultPlaylistController extends Controller
{
    public function index(){
        return view("default_saved_playlist");
    }
}
