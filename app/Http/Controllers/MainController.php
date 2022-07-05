<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function home(){


        //find tasks available
        $tasks = Task::all();
        //$tasks = Task::where('visible',1)->get();

        return view('home', ['tasks'=>$tasks]);
    }

    public function new_task(){
        //display new task form

        return view('new_task_form');
    }

    public function new_task_submit(){
        echo 'Tarefa submetida com sucesso';
    }
}
