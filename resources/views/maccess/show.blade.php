@extends('layouts.app')

@section('content')
<h4>{{ $project->projectid }}</h4>
<p>{{ $project->project_name }}</p>
<a href="{{ route('project.index') }}" class="btn btn-default">Kembali</a>
@endsection