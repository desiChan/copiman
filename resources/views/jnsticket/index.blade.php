@extends('layouts.app')

@section('content')
    <a href="{{ route('jnsticket.create') }}" class="btn btn-info btn-sm">Jenis Ticket Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive martop-sm">
        <thead>
            <th>Jenis Ticket</th>
            <th>Keterangan</th>
			<th>Otorisasi</th>
            <th>Action</th>
        </thead>
        <tbody>	
            @foreach ($jnsticket as $a)
                <tr>
                    <td>{{ $a->jnsticket }}</td>
                    <td><a href="{{ route('jnsticket.show', $a->jnsticket) }}">{{ $a->keterangan }}</a></td>
					<td>{{ $a->otorisasi }}</td>
                    <td>
                        <form action="{{ route('jnsticket.destroy', $a->jnsticket) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('jnsticket.edit', $a->jnsticket) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	{{ $jnsticket->links() }}
@endsection