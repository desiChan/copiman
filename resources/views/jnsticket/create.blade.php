@extends('layouts.app')

@section('content')
<h4>Jenis Ticket Baru</h4>
<form action="{{ route('jnsticket.store') }}" method="post">
    {{csrf_field()}}
	<div class="form-group {{ $errors->has('jnsticket') ? 'has-error' : '' }}">
        <label for="jnsticket" class="control-label">Jenis Ticket</label>
        <input type="text" class="form-control" name="jnsticket" placeholder="Jenis Ticket">
        @if ($errors->has('jnsticket'))
            <span class="help-block">{{ $errors->first('jnsticket') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
        <label for="keterangan" class="control-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
        @if ($errors->has('keterangan'))
            <span class="help-block">{{ $errors->first('keterangan') }}</span>
        @endif
    </div>
	<div class="form-group {{ $errors->has('otorisasi') ? 'has-error' : '' }}">
        <label for="otorisasi" class="control-label">Otorisasi</label>
        <input type="text" class="form-control" name="otorisasi" placeholder="Otorisasi">
        @if ($errors->has('otorisasi'))
            <span class="help-block">{{ $errors->first('otorisasi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('jnsticket.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection