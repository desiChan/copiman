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
                                        <h2 class="title-1">Tambah Menu</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>{{ $client->clientid }}</h4>
									<p>{{ $client->client_name }}</p>
									<p>{{ $client->address }}</p>
									<p>{{ $client->phn }}</p>
									<p>{{ $client->email }}</p>
									<p>Mou Date {{ $client->mou_date }}</p>
									<a href="{{ route('client.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
</section>


    <!--      -->
    @endsection