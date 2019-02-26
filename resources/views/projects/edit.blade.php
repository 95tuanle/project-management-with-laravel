@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>
    <form method="post" action="/projects/{{$project->id}}" style="margin-bottom: 1em;">
        @method('patch')
        @csrf
        {{--{{method_field('patch')}}--}}
        {{--{{csrf_field()}}--}}
        <div class="field">
            <label class="label"  for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" required>
            </div>
        </div>
        <div class="field">
            <label class="label"  for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" required>{{ $project->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    <form method="post" action="/projects/{{$project->id}}">
        @method('delete')
        @csrf
        {{--{{method_field('delete')}}--}}
        {{--{{csrf_field()}}--}}
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>

@endsection