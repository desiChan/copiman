@extends('layouts.app')

@section('content')
<h4>Modul Baru</h4>
<form action="{{ route('project.store') }}" method="post">
    {{csrf_field()}}
	<div class="form-group {{ $errors->has('projectid') ? 'has-error' : '' }}">
        <label for="projectid" class="control-label">Project ID</label>
        <input type="text" class="form-control" name="projectid" placeholder="Project Name">
        @if ($errors->has('projectid'))
            <span class="help-block">{{ $errors->first('projectid') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('project_name') ? 'has-error' : '' }}">
        <label for="project_name" class="control-label">Project Name</label>
        <input type="text" class="form-control" name="project_name" placeholder="Project Name">
        @if ($errors->has('project_name'))
            <span class="help-block">{{ $errors->first('project_name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('project.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection