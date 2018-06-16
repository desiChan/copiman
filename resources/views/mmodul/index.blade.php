@extends('layouts.app')

@section('content')
    <a href="{{ route('mmodul.create') }}" class="btn btn-info btn-sm">Modul Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive martop-sm">
        <thead>
            <th>Modul Id</th>
            <th>Modul Name</th>
            <th>Action</th>
        </thead>
        <tbody>	
            @foreach ($mmodul as $a)
                <tr>
                    <td>{{ $a->modulid }}</td>
                    <td><a href="{{ route('mmodul.show', $a->modulid) }}">{{ $a->modul_name }}</a></td>
                    <td>
                        <form action="{{ route('mmodul.destroy', $a->modulid) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('mmodul.edit', $a->modulid) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	{{ $mmodul->links() }}
@endsection