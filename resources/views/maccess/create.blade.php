@extends('layouts.app')

@section('content')
<h4>Akses Menu Baru</h4>
<form action="{{ route('maccess.store') }}" method="post">
    {{csrf_field()}}
	<div class="form-group {{ $errors->has('group_menu') ? 'has-error' : '' }}">
        <label for="group_menu" class="control-label">Group Menu</label>
        <input type="text" class="form-control" name="group_menu" placeholder="Group Menu">
        @if ($errors->has('group_menu'))
            <span class="help-block">{{ $errors->first('group_menu') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('menuid') ? 'has-error' : '' }}">
        <label for="menuid" class="control-label">Menu ID</label>
        <input type="text" class="form-control" name="menuid" placeholder="Menu ID">
        @if ($errors->has('menuid'))
            <span class="help-block">{{ $errors->first('menuid') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('maccess.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection