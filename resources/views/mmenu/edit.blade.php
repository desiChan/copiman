@extends('layouts.app')

@section('content')
<h4>Ubah Menu</h4>
<form action="{{ route('mmenu.update', $mmenu->menuid) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('menu_name') ? 'has-error' : '' }}">
        <label for="menu_name" class="control-label">Menu Name</label>
        <input type="text" class="form-control" name="menu_name" placeholder="menu_name" value="{{ $mmenu->menu_name }}">
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