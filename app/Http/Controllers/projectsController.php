<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class projectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('projects.index',compact('projects'));
    }

    public function store()
    {
        Project::create(request(['title','description']));
        return redirect('/post');
    }
}
