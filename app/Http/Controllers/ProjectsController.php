<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class ProjectsController extends Controller
{
    /**
     * It shows the listing of the user projects
     *
     * @return View
     */
    public function index(): View
    {
        $projects = auth()->user()->projects;

        return view("projects.index", compact('projects'));
    }

    /**
     * It shows the authenticated user project detail
     *
     * @param Project $project
     * @return View
     */
    public function show(Project $project): View
    {

        if (auth()->user()->isNot($project->owner)) {
            abort(403);
        }

        return view("projects.show", compact('project'));
    }

    /**
     * It creates a project for a specific authorized user
     *
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        $input = request()->validate(["title" => "required", "description" => "required"]);

        auth()->user()->projects()->create($input);

        return redirect("/projects");
    }
}
