@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-3">{{ $project->title }}</h1>
    <h6 class="text-end text-muted">{{ $project->slug }}</h6>
    <p class="text-center mt-4">{{ $project->description }}</p>
@endsection
