@extends('layouts.app')

@section('content')
    <h1>Elenco progetti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ ( $project->created_at )->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-secondary">Modifica</a>
                        <form class="d-inline" action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimina" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
