<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $project->addTask(request()->validate(['description' => 'required']));
        return back();
    }

//    public function update(Task $task) {
//        $method = request()->has('completed') ? 'complete' : 'incomplete';
//        $task->$method();
//
////        if (\request()->has('completed')) {
////            $task->complete();
////        } else {
////            $task->incomplete();
////        }
//
////        request()->has('completed') ? $task->complete() : $task->incomplete();
//
////        $task->complete(request()->has('completed'));
//
////        $task->update([
////            'completed' => request()->has('completed')
////        ]);
//
//        return back();
//    }
}
