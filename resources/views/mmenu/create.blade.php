@extends('layouts.app')

@section('content')
<h4>Menu Baru</h4>
<form action="{{ route('mmenu.store') }}" method="post">
    {{csrf_field()}}
	<div class="form-group {{ $errors->has('menuid') ? 'has-error' : '' }}">
        <label for="menuid" class="control-label">Menu ID</label>
        <input type="text" class="form-control" name="menuid" placeholder="Menu Name">
        @if ($errors->has('menuid'))
            <span class="help-block">{{ $errors->first('menuid') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('menu_name') ? 'has-error' : '' }}">
        <label for="menu_name" class="control-label">Menu Name</label>
        <input type="text" class="form-control" name="menu_name" placeholder="Menu Name">
        @if ($errors->has('menu_name'))
            <span class="help-block">{{ $errors->first('menu_name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('mmenu.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection