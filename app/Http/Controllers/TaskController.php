<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        $tasks = $this->allTasksFromDB();
        return view('tasks.all_tasks', compact('tasks'));
    }

    public function deleteTaskFromDB($id){

        db::table('tasks')->where('id', $id)->delete();
        return back();

    }

    public function viewTask($id){

        $task = db::table('tasks')
        ->join('users', 'tasks.user_id', 'users.id')
        ->where('tasks.id', $id)
        ->select('tasks.*', 'users.name as username')
        ->first();


        return view('tasks.view_task', compact('task'));
    }

    private function allTasksFromDB(){

        $tasks = DB::table('tasks')
        ->join('users', 'tasks.user_id','=' ,'users.id')
        ->select('tasks.*', 'users.name as username')
        ->get();

        return $tasks;

    }
}
