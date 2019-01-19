@extends('copiman.index')
@section('content')

				<section>	
				<div class="main-content">
                    <div class="section__content section__content--p30">
						<!-- ISI CONTENT PASTE -->
                        <div class="container-fluid">
							<div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Client</h2>
                                    </div>
                                    <br>
                                    <a href="{{ url('createclient') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add item</a>
                                </div>
                            </div>
                                <div class="row">  
                                    <div class="col-md-12"><br></div>
                                    <div class="col-md-11"> 
                                    
                                    @if ($message = Session::get('message'))
                                            <div class="alert alert-success martop-sm">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif

                                        <table class="table table-bordered table-striped table-hover table-responsive">
                                            <thead>
                                                <th>ClientId</th>
                                                <th>Client Name</th>
    											<th>Address</th>
    											<th>Phone</th>
    											<th>Email</th>
    											<th>Mou Date</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>	
                                                @foreach ($client as $a)
                                                    <tr>
                                                        <td>{{ $a->clientid }}</td>
                                                        <td><a href="{{ url('/clientdetail') }}&{{ $a->clientid }}">{{ $a->client_name }}</a></td>
    													<td>{{ $a->address }}</td>
    													<td>{{ $a->phn }}</td>
    													<td>{{ $a->email }}</td>
    													<td>{{ $a->mou_date }}</td>
                                                        <td>
                                                            <form action="{{ route('client.destroy', $a->clientid) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <a href="{{ url('/clientedit') }}&{{ $a->clientid }}" class="zmdi zmdi-edit" data-toggle="tooltip" data-placement="top" title="Edit">&nbsp;&nbsp;</a>
                                                                <button type="submit" class="zmdi zmdi-delete" data-placement="top" title="Delete"></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    	{{ $client->links() }}
                                </div>
                            </div>
                            <!-- AKHIR ISI CONTENT PASTE -->
						</div>
					</div>
				</div>
				</section>
                
        <!--      -->
        @endsection


