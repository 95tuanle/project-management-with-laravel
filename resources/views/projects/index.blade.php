@extends('layout')
@section('content')
    <h1 class="title">Projects</h1>
    <ul>
        <li>
            <a href="/projects/create">
                CREATE
            </a>
        </li>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection