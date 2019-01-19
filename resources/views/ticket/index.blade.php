@extends('copiman.index')
@section('content')


<section>

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <a href="{{ url('createticket') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add item</a>
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
                                        <th>Ticket Id</th>
                                        <th>Project</th>
                                        <th>Modul</th>
                                        <th>Jenis Tiket</th>
                                        <th>Dateline</th>
                                        <th>Keterangan</th>
                                        <th>User Create</th>
                                        <th>User Approve</th>
                                        <th>User Handle</th>
                                        <th>Status Ticket</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody> 
                                        @foreach ($ticket as $a)
                                            <tr>
                                                <td>{{ $a->ticketid }}</td>
                                                <td>{{ $a->project_name }}</td>
                                                <td>{{ $a->modul_name }}</td>
                                                <td>{{ $a->ket_jnsticket }}</td>
                                                <td>{{ $a->dateline_client }}</td>
                                                <td>{{ $a->keterangan }}</td>
                                                <td>{{ $a->user_create }}</td>
                                                <td>{{ $a->user_approve }}</td>
                                                <td>{{ $a->user_handle }}</td>
                                                <td>{{ $a->status_ticket }}</td>
                                                <td>
                                                    <form action="{{ route('ticket.destroy', $a->ticketid) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $ticket->links() }}
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