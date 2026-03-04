@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<h2 class="mb-4">My Projects</h2>
<div class="row">
    @foreach ($projects as $project)
    <div class="col-md-6 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                <p><strong>Year:</strong> {{ $project->year }}</p>
                @if($project->link)
                <a href="{{ $project->link }}" target="_blank" class="btn btn-primary btn-sm">View Project</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection