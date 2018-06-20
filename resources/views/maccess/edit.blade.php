@extends('layouts.app')

@section('content')
<h4>Ubah Project</h4>
<form action="{{ route('project.update', $project->projectid) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('project_name') ? 'has-error' : '' }}">
        <label for="project_name" class="control-label">Project Name</label>
        <input type="text" class="form-control" name="project_name" placeholder="project_name" value="{{ $project->project_name }}">
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