<?php

namespace App\Http\Controllers\ProjectController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $Projects = Project::all();
        return view('private.projects.index', compact('Projects'));
    }

    public function create()
    {
        return view('private.projects.create');
    }

    public function store(Request $request)
    {
        Project::create([
            'project_name' => $request->project_name,
            'year' => $request->year,
            'role' => $request->role,
            'contribution_status' => $request->contribution_status,
            'description' => $request->description,

        ]);
        return redirect('/private/projects');
    }
}
