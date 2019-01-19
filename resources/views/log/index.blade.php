@extends('copiman.index')
@section('content')


<section>

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <a href="{{ url('createlog') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add item</a>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                
                                @if ($message = Session::get('message'))
                                    <div class="alert alert-success martop-sm">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <table class="table table-bordered table-striped table-hover table-responsive">
                                    <thead>
                                        <th>Log Id</th>
                                        <th>Field</th>
                                        <th>Function</th>
                                        <th>Modul</th>
                                        <th>Prosedure</th>
                                        <th>Tanggal Berubah</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody> 
                                        @foreach ($log as $a)
                                            <tr>
                                                <td>{{ $a->logid }}</td>
                                                <td>{{ $a->field }}</td>
                                                <td>{{ $a->function }}</td>
                                                <td>{{ $a->modul_name }}</td>
                                                <td>{{ $a->prosedure }}</td>
                                                <td>{{ $a->mou_date }}</td>
                                                <td>{{ $a->keterangan }}</td>
                                                <td>
                                                            <form action="{{ route('log.destroy', $a->logid) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <a href="{{ url('/logedit') }}&{{ $a->logid }}" class="zmdi zmdi-edit" data-placement="top" title="Edit">&nbsp;&nbsp;</a>
                                                                <button type="submit" class="zmdi zmdi-delete" data-placement="top" title="Delete"></button>
                                                            </form>
                                                        </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $log->links() }}
                            </div>
                        </div>
                        <!-- AKHIR ISI CONTENT PASTE -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
</section>


    <!--      -->
    @endsection