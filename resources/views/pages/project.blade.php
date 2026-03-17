@extends('layouts.content')

@section('title', 'projects')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">My Project</h1>

        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3"> Add New Project</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> Title </th>
                    <th> Description </th>   
                    <th> Tech Stack </th> 
                    <th> Year </th>
                    <th> Actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td> {{ $project->title }} </td>
                    <td> {{ $project->description }} </td>
                    <td> {{ $project->tech_stack }} </td>
                    <td> {{ $project->year }} </td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning mb-3">
                            Edit Project
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection