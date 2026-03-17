@extends('layouts.content')

@section('title', 'projects')

@section('content')
    <div class="container">
        <h1>Add New Project</h1>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Project Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <input type="text" class="form-control" name="description">
            </div>

            <div class="mb-3">
                <label>Tech Stack</label>
                <input type="text" class="form-control" name="tech_stack">
            </div>

            <div class="mb-3">
                <label>Year</label>
                <input type="number" class="form-control" name="year">
            </div>

            <button type="submit" class="btn btn-success">Save Project</button>
        </form>
    </div>
@endsection