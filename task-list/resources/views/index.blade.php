@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <ul>
        @forelse ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </li>
        @empty
            <div>There are no Tasks</div>
        @endforelse
    </ul>
@endsection
