@extends('layouts.app')
@section('content')

<div class="container py-5">

    <h1 class="mb-5">
        Progetto: {{ $project['title'] }}
    </h1>

    <div>
        <h6>tipologia:</h6>

        @if($project->type)
            <mark class="d-inline-block mb-3">{{ $project->type->type }}</mark>
        @else
            <span class="d-inline-block mb-3">Non specificato</span>
        @endif
    </div>
    
    <div class="mb-3">
        <h6>tecnologie usate:</h6>

        @forelse ($project->technologies as $tech)
        <span class="badge rounded-pill text-bg-warning">{{ $tech->name }}</span>
        @empty
            <span>-</span>
        @endforelse
    </div>

    <div>
        <h6>Descrizione:</h6>
        <p>{{ $project['description'] }}</p>
        <h6>Url:</h6>
        <a href="{{ $project['url'] }}" target=”_blank”>{{ $project['url'] }}</a>
    </div>

</div>

@endsection