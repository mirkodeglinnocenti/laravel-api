@extends('layouts.app')
@section('content')


<div class="container">

    <h1 class="py-4">
        Vuoi eliminare il progetto?
    </h1>

    <h3 class="text-primary mb-4">
        {{ $project->title }}
    </h3>
        
    <form 
    action="{{ route('projects.destroy', $project) }}" method="POST"
    class="row">
        @csrf
        @method('DELETE')
    
        <div class="col-auto">
            <input type="submit" value="Delete" class="btn btn-danger"> 
        </div>

    </form>

</div>

@endsection