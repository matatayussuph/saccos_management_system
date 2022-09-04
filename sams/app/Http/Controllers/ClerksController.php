<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClerksController extends Controller
{
    public function create()
    {
        return view('clerks.create_member');
    }
}
