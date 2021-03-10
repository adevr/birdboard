<!DOCTYPE html>
<html>

<head>
    <title>BirdBoard</title>
</head>
<body>
    <h1>BirdBoard</h1>

    @foreach($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
</body>
</html>
