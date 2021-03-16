<!DOCTYPE html>
<html>

<head>
    <title>BirdB oard</title>
</head>
<body>
<h1>BirdBoard</h1>

@forelse($projects as $project)
    <li><a href="{{$project->path()}}"> {{ $project->title }}</a></li>
@empty
    <li>No projects yet.</li>
@endforelse
</body>
</html>
