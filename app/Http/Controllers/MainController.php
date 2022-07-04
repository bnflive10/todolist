<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function home(){


        dd(task::all());
    }
}
