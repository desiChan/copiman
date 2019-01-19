@extends('copiman.index')
@section('content')


<section>
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>Edit Project</h4>
                                    <form action="{{ route('log.update', $log->logid) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('field') ? 'has-error' : '' }}">
                                            <label for="field" class="control-label">Field</label>
                                            <input type="file" class="form-control" name="field" placeholder="Field">
                                            @if ($errors->has('field'))
                                                <span class="help-block">{{ $errors->first('field') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('function') ? 'has-error' : '' }}">
                                            <label for="function" class="control-label">Function</label>
                                            <input type="file" class="form-control" name="function" placeholder="Function">
                                            @if ($errors->has('function'))
                                                <span class="help-block">{{ $errors->first('function') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('prosedure') ? 'has-error' : '' }}">
                                            <label for="prosedure" class="control-label">Prosedur</label>
                                            <input type="file" class="form-control" name="prosedure" placeholder="Prosedur">
                                            @if ($errors->has('prosedure'))
                                                <span class="help-block">{{ $errors->first('prosedure') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('mou_date') ? 'has-error' : '' }}">
                                            <label for="mou_date" class="control-label">Dateline</label>
                                            <input type="date" class="form-control" value="{{$log->mou_date}}" name="mou_date" placeholder="Dateline" readonly>
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="keterangan" class="control-label">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" placeholder="Keterangan" rows="5"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('log.index') }}" class="btn btn-danger">Back</a>
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