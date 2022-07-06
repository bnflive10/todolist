<?php

namespace App\Http\Controllers;

use App\Models\task;
use DateTime;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class MainController extends Controller
{
    //

    public function home(){


        //find tasks available
        $tasks = Task::orderBy('id','desc')->paginate(5);
        //$tasks = Task::where('visible',1)->get();

        return view('home', ['tasks'=>$tasks]);
    }

    public function new_task(){
        //display new task form

        return view('new_task_form');
    }

    public function new_task_submit(Request $request){

        //get form data do a new task variable
        $new_task = $request->input('text_new_task','LOLLLLLLLLLLLLL');
        
    //save the new task into the database
        $task = new Task();
        $task->task = $new_task;
        $task->save();

        //redirect to home
        return redirect()->route('home');



        /* if($_SERVER['REQUEST_METHOD']=='POST'){
            dd($request);
        }

        if(!$request->isMethod('POST')){
            die('Url errada');
        } */
        

    }

    public function task_done($task_id){

        //update to the task done
        $task = Task::find($task_id);
        $task->done = new DateTime();
        $task->save();

        return redirect()->route('home');
    }

    public function task_undone($task_id){
        $task = Task::find($task_id);
        $task->done = null;
        $task->save();

        return redirect()->route('home');
    }


    public function edit_task($task_id){

        $task = Task::find($task_id);
        
        //dd($task);
        return view('edit_task_form',['task'=>$task]);
    }

    public function edit_task_submit(Request $request){
        //get request data
        $task_id = $request->input('task_id');
        $edit_task = $request->input('text_edit_task');
        
        //update task data
        $task = Task::find($task_id);
        $task->task = $edit_task;
        $task->save();

        //redirect do home page
        return redirect()->route('home');
    }
}
