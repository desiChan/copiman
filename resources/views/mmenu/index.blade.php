@extends('layouts.app')

@section('content')
    <a href="{{ route('mmenu.create') }}" class="btn btn-info btn-sm">Menu Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>Menu Id</th>
            <th>Menu Name</th>
            <th>Action</th>
        </thead>
        <tbody>	
            @foreach ($mmenu as $a)
                <tr>
                    <td>{{ $a->menuid }}</td>
                    <td><a href="{{ route('mmenu.show', $a->menuid) }}">{{ $a->menu_name }}</a></td>
                    <td>
                        <form action="{{ route('mmenu.destroy', $a->menuid) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('mmenu.edit', $a->menuid) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection