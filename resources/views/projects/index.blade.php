@extends('layouts.app')
@section('content')

<div class="container pt-4">
    <h1 class="text-center">Lista Progetti</h1>
</div>

<div class="container py-3">

    <div class="d-flex justify-content-end pb-3">
        <a href="{{ route('projects.create')}}" class="btn btn-success">Aggiungi progetto</a>
    </div>

    <table class="table table-striped table-inverse table-responsive border border-black">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Tipologia</th>
                <th>Tecnologie</th>
                <th>Descrizione</th>
                <th>Url</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>
                        <a href="{{ route('projects.show', $project)}}">
                            {{ $project->title }}
                        </a>
                    </td>
                    <td>
                        @if($project->type)
                            <span class="d-inline-block mb-3">{{ $project->type->type }}</span>
                        @else
                            <span class="d-inline-block mb-3">-</span>
                        @endif
                    </td>
                    <td>
                        @forelse ($project->technologies as $tech)
                            <span class="badge rounded-pill text-bg-warning">{{ $tech->name }}</span>
                        @empty
                            <span>-</span>
                        @endforelse
                    </td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->url }}</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="{{ route('projects.edit', $project->slug)}}" class="btn btn-sm btn-primary">Modifica</a>
                            <a href="{{ route('projects.delete', $project) }}" class="btn btn-sm btn-danger">Elimina</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection