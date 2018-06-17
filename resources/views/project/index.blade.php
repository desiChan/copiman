@extends('layouts.app')

@section('content')
    <a href="{{ route('project.create') }}" class="btn btn-info btn-sm">Project Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive martop-sm">
        <thead>
            <th>Project Id</th>
            <th>Project Name</th>
            <th>Action</th>
        </thead>
        <tbody>	
            @foreach ($project as $a)
                <tr>
                    <td>{{ $a->projectid }}</td>
                    <td><a href="{{ route('project.show', $a->projectid) }}">{{ $a->project_name }}</a></td>
                    <td>
                        <form action="{{ route('project.destroy', $a->projectid) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('project.edit', $a->projectid) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	{{ $project->links() }}
@endsection