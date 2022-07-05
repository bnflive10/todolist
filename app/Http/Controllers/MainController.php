<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function home(){


        //buscar tasks disponiveis
        $tasks = Task::all();

        return view('home', ['tasks'=>$tasks]);
    }

    public function new_task(){

        echo 'adicionar task';
    }
}
