@extends('layouts.app')

@section('content')
<h4>{{ $mmodul->modulid }}</h4>
<p>{{ $mmodul->modul_name }}</p>
<a href="{{ route('mmodul.index') }}" class="btn btn-default">Kembali</a>
@endsection