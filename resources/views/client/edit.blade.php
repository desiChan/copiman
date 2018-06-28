@extends('copiman.index')
@section('content')

			<section>
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>Edit Client</h4>
                                    <form action="{{ route('client.update', $client->clientid) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('client_name') ? 'has-error' : '' }}">
                                            <label for="client_name" class="control-label">Client Name</label>
                                            <input type="text" class="form-control" name="client_name" placeholder="Client Name" value="{{ $client->client_name }}">
                                            @if ($errors->has('client_name'))
                                                <span class="help-block">{{ $errors->first('client_name') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                            <label for="address" class="control-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Client Name" value="{{ $client->address }}">
                                            @if ($errors->has('address'))
                                                <span class="help-block">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('phn') ? 'has-error' : '' }}">
                                            <label for="phn" class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phn" placeholder="Phone" value="{{ $client->phn }}">
                                            @if ($errors->has('phn'))
                                                <span class="help-block">{{ $errors->first('phn') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label for="email" class="control-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $client->email }}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('mou_date') ? 'has-error' : '' }}">
                                            <label for="mou_date" class="control-label">Mou Date</label>
                                            <input type="date" class="form-control" name="mou_date" placeholder="Mou Date" value="{{ $client->mou_date }}">
                                            @if ($errors->has('mou_date'))
                                                <span class="help-block">{{ $errors->first('mou_date') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('client.index') }}" class="btn btn-default">Back</a>
                                        </div>
                                    </form>
                           </div>
						</div>
					</div>
				</div>
			</div>
		</section>	

    <!--      -->
    @endsection