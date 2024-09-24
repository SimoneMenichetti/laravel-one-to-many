@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p><strong>Descrizione:</strong> {{ $project->description }}</p>
        {{-- <p><strong>Slug:</strong> {{ $project->slug }}</p> --}}

        @if ($project->type)
            <p><strong>Tipo:</strong> {{ $project->type->name }}</p>
        @else
            <p><strong>Tipo:</strong> Nessun tipo associato.</p>
        @endif

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna ai progetti</a>
    </div>
@endsection
