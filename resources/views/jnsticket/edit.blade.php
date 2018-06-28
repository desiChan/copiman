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
                                <h4>Edit Ticket Type</h4>
                                    <form action="{{ route('jnsticket.update', $jnsticket->jnsticket) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="keterangan" class="control-label">Description</label>
                                            <input type="text" class="form-control" name="keterangan" placeholder="Description" value="{{ $jnsticket->keterangan }}">
                                            @if ($errors->has('keterangan'))
                                                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('otorisasi') ? 'has-error' : '' }}">
                                            <label for="otorisasi" class="control-label">Approval</label>
                                            <input type="text" class="form-control" name="otorisasi" placeholder="Approval" value="{{ $jnsticket->otorisasi }}">
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
</section>


    <!--      -->
    @endsection