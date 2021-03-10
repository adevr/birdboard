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
        $input = request()->validate( ["title" => "required", "description" => "required"]);

        Project::create($input);

        return redirect("/projects");
    }
}
