@extends('layouts.app')
@section('title', 'Projects')
@section('content')

    <div class="container p-3">
        <h1>Projects</h1>
    </div>
    <div class="container p-3">
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                <tr>
                  <td>{{ $project->id }}</td>
                  <td>{{ $project->title }}</td>                
                  <td>{{ $project->description }}</td>
                  <td>
                    {{-- edit e delete --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection