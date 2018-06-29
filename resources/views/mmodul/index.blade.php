@extends('copiman.index')
@section('content')


<section>
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Modul</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
								<a href="{{ url('createmmodul') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add item</a>

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
                                            <td><a href="{{ url('/mmoduldetail') }}&{{ $a->modulid }}">{{ $a->modul_name }}</a></td>
                                            <td>
                                                <form action="{{ route('mmodul.destroy', $a->modulid) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ url('/mmoduledit') }}&{{ $a->modulid }}" class="zmdi zmdi-edit" data-toggle="tooltip" data-placement="top" title="Edit">&nbsp;&nbsp;</a>
                                                    <button type="submit" class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Delete"></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $mmodul->links() }}
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