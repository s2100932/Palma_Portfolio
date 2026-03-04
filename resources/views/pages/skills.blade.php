@extends('layouts.content')

@section('title', 'Skills')

@section('content')
<h2 class="mb-4">My Skills</h2>
<div class="row">
    @foreach ($skills as $skill)
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $skill->name }}</h5>
                <p class="card-text">Level: {{ $skill->level }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection