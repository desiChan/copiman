@extends('layouts.app')

@section('content')
<h4>Modul Baru</h4>
<form action="{{ route('mmodul.store') }}" method="post">
    {{csrf_field()}}
	<div class="form-group {{ $errors->has('modulid') ? 'has-error' : '' }}">
        <label for="modulid" class="control-label">Modul ID</label>
        <input type="text" class="form-control" name="modulid" placeholder="Modul Name">
        @if ($errors->has('modulid'))
            <span class="help-block">{{ $errors->first('modulid') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('modul_name') ? 'has-error' : '' }}">
        <label for="modul_name" class="control-label">Modul Name</label>
        <input type="text" class="form-control" name="modul_name" placeholder="Modul Name">
        @if ($errors->has('modul_name'))
            <span class="help-block">{{ $errors->first('modul_name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('mmodul.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection