<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Tasks Listing</title>
</head>

<body>

    <h1>Tasks List</h1>
    <ul>
        @forelse ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </li>
        @empty
            <div>There are no Tasks</div>
        @endforelse
    </ul>
</body>

</html>
