<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class ProjectsController extends Controller
{
    public function index(): View
    {
        $projects = Project::all();

        return view("projects.index", compact('projects'));
    }

    public function store(): RedirectResponse
    {
        Project::create(request(["title", "description"]));

        return redirect("/projects");
    }
}
