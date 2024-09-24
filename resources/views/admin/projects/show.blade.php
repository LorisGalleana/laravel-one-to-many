@extends('layouts.app')

@section('content')

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <h1>Dettagli progetto</h1>
    <ul>
        <li>Titolo: {{ $project->title }} </li>
        <li>Descrizione: {{ $project->text }} </li>
        <li>Data creazione: {{ ( $project->created_at )->format('d/m/Y') }} </li>
        <li>Data ultima modifica: {{ ( $project->updated_at )->format('d/m/Y') }} </li>
    </ul>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna all'elenco</a>

@endsection
