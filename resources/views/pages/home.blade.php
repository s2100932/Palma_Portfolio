@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-md-4">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="img-fluid rounded-circle mb-3">
    </div>
    <div class="col-md-8">
        <h1>{{ $profile->first_name }} {{ $profile->last_name }}</h1>
        <h4>{{ $profile->title }}</h4>
        <p>{{ $profile->bio }}</p>
        <ul class="list-unstyled">
            <li><strong>Contact:</strong> {{ $profile->contact }}</li>
            <li><strong>Email:</strong> {{ $profile->email }}</li>
            <li><strong>Location:</strong> {{ $profile->location }}</li>
        </ul>
        <p>
            Explore my <a href="{{ route('skills') }}">Skills</a>, 
            <a href="{{ route('projects') }}">Projects</a>, and 
            <a href="{{ route('experiences') }}">Experiences</a>.
        </p>
    </div>
</div>
@endsection