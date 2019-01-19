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
                                        <h2 class="title-1">Project</h2>
                                    </div>
                                    <br>
                                    <a href="{{ url('createproject') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add item</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-6"> 
								
                                @if ($message = Session::get('message'))
                                    <div class="alert alert-success martop-sm">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <table class="table table-bordered table-striped table-hover table-responsive">
                                    <thead>
                                        <th>Project Id</th>
                                        <th>Project Name</th>
                                        <th>Client</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody> 
                                        @foreach ($project as $a)
                                            <tr>
                                                <td>{{ $a->projectid }}</td>
                                                <td><a href="{{ url('/projectdetail') }}&{{ $a->projectid }}">{{ $a->project_name }}</a></td>
                                                <td>{{ $a->client_name }}</td>
                                                <td>
                                                    <form action="{{ route('project.destroy', $a->projectid) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
														<a href="{{ url('/projectedit') }}&{{ $a->projectid }}" class="zmdi zmdi-edit" data-toggle="tooltip" data-placement="top" title="Edit">&nbsp;&nbsp;</a>
                                                        <button type="submit" class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Delete"></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $project->links() }}
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