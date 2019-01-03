<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Jobs\NewTask;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function runTask()
    {
    	// Initiate the background task
    	$user = User::first();
    	$data = [
    		'status' => 0,
    		'user_id' => $user->id
    	];
    	$task = Task::create($data);
    	$this->dispatch(new NewTask($user, $task));

    	return $task;
    	// Insert status in Tasks table

    	// Send a response
    }
}
