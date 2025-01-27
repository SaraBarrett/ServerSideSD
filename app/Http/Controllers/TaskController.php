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

    private function allTasksFromDB(){

        $tasks = DB::table('tasks')
        ->join('users', 'tasks.user_id','=' ,'users.id')
        ->select('tasks.*', 'users.name as username')
        ->get();

        return $tasks;

    }
}
