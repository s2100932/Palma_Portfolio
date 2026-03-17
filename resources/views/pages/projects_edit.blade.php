@extends('layouts.content')

@section('title', 'Edit Project')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>

        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Project Title</label>
                <input type="text" class="form-control" name="title" value="{{ $project->title }}">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $project->description }}">
            </div>

            <div class="mb-3">
                <label>Tech Stack</label>
                <input type="text" class="form-control" name="tech_stack" value="{{ $project->tech_stack }}">
            </div>

            <div class="mb-3">
                <label>Year</label>
                <input type="number" class="form-control" name="year" value="{{ $project->year }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection