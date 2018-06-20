@extends('layouts.app')

@section('content')
    <a href="{{ route('maccess.create') }}" class="btn btn-info btn-sm">Akses Menu Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive martop-sm">
        <thead>
            <th>Group Menu</th>
            <th>Menu Id</th>
            <th>Action</th>
        </thead>
        <tbody>	
            @foreach ($maccess as $a)
                <tr>
                    <td>{{ $a->group_menu }}</td>
                    <td><a href="{{ route('maccess.show', $a->group_menu) }}">{{ $a->menuid }}</a></td>
                    <td>
                        <form action="{{ route('maccess.destroy', $a->group_menu) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('maccess.edit', $a->group_menu) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	{{ $maccess->links() }}
@endsection