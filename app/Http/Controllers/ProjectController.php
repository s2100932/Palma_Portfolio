<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{   
    // READ
    public function index()
    {
        $projects = Project::all();

        return view('pages.project', compact('projects'));
    }

    // CREATE FORM
    public function create()
    {
        return view('pages.projects_create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'tech_stack' => 'nullable',
            'description' => 'required|max:255',
            'year' => 'required',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project added successfully!');
    }

    // EDIT FORM
    public function edit(Project $project)
    {
        return view('pages.projects_edit', compact('project'));
    }

    // UPDATE DATA
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'tech_stack' => 'nullable',
            'description' => 'required|max:255',
            'year' => 'required',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project updated successfully!');
    }
}