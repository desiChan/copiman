@extends('layouts.app')

@section('content')
<h4>Ubah Modul</h4>
<form action="{{ route('mmodul.update', $mmodul->modulid) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('modul_name') ? 'has-error' : '' }}">
        <label for="modul_name" class="control-label">Modul Name</label>
        <input type="text" class="form-control" name="modul_name" placeholder="modul_name" value="{{ $mmodul->modul_name }}">
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