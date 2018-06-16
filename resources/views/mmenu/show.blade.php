@extends('layouts.app')

@section('content')
<h4>{{ $mmenu->menuid }}</h4>
<p>{{ $mmenu->menu_name }}</p>
<a href="{{ route('mmenu.index') }}" class="btn btn-default">Kembali</a>
@endsection