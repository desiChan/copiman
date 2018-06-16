@extends('layouts.app')

@section('content')
<h4>{{ $jnsticket->jnsticket }}</h4>
<p>{{ $jnsticket->keterangan }}</p>
<p>{{ $jnsticket->otorisasi }}</p>
<a href="{{ route('jnsticket.index') }}" class="btn btn-default">Kembali</a>
@endsection