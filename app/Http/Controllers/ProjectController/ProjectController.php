<?php

namespace App\Http\Controllers\ProjectController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

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

    public function edit(Project $project)
    {
        return response()->json($project);
    }

    // update data
    public function update(Request $request, Project $project)
    {
        $project->update([
            'project_name' => $request->project_name,
            'year' => $request->year,
            'role' => $request->role,
            'contribution_status' => $request->contribution_status,
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'updated']);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json([
            'message' =>'Project deleted'
        ]);
    }
}
