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
                                <h4>Add Ticket Type</h4>
                                    <form action="{{ route('jnsticket.store') }}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group {{ $errors->has('jnsticket') ? 'has-error' : '' }}">
                                            <label for="jnsticket" class="control-label">Ticket Type</label>
                                            <input type="text" class="form-control" name="jnsticket" placeholder="Ticket Type">
											@if ($errors->has('jnsticket'))
                                                <span class="help-block">{{ $errors->first('jnsticket') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="keterangan" class="control-label">Decription</label>
                                            <input type="text" class="form-control" name="keterangan" placeholder="Decription">
                                            @if ($errors->has('keterangan'))
                                                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('otorisasi') ? 'has-error' : '' }}">
                                            <label for="otorisasi" class="control-label">Approval</label>
                                            <input type="text" class="form-control" name="otorisasi" placeholder="Approval">
                                            @if ($errors->has('otorisasi'))
                                                <span class="help-block">{{ $errors->first('otorisasi') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('jnsticket.index') }}" class="btn btn-default">Back</a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <!-- AKHIR ISI CONTENT PASTE -->
                        
                    </div>
                </div>
            </div>
		</section>	
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        


    <!--      -->
    @endsection