@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-3">{{ $project->title }}</h1>
    @if ($project->type)
        <h6 class="text-end text-muted">{{ $project->type?->name }}</h6>
    @else
        <h6 class="text-end text-muted">Type Unknown</h6>
    @endif
    <h6 class="text-end text-muted">{{ $project->slug }}</h6>
    <p class="text-center mt-4">{{ $project->description }}</p>
@endsection
