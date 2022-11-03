<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Same functionality as
     * Route::get('tasks', function () {
     *      return view('tasks.index')
     *          ->with('tasks', Task::all());
     */
    public function index()
    {
        return view('tasks.index')
            ->with('tasks', Task::all());
    }
    /**
     * request()->only(['title', 'description']);
     * returns:
     * [
     *      'title' => 'Whatever title the user typed on the previous page',
     *      'description' => 'Whatever description the user typed on the previous page',
     * ]
     */
    public function store(Request $request)
    {
        Task::create($request()->only(['title', 'description']));

        return redirect('tasks');
    }
}
