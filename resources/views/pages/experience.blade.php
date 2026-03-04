@extends('layouts.content')

@section('title', 'Experiences')

@section('content')
<h2 class="mb-4">My Experiences</h2>
<div class="row">
    @foreach ($experiences as $experience)
    <div class="col-md-6 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $experience->role }}</h5>
                <p class="card-text">{{ $experience->description }}</p>
                <p><strong>Organization:</strong> {{ $experience->organization }}</p>
                <p><strong>Year:</strong> {{ $experience->year }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection