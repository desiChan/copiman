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
                               <h4>New Modul</h4>
                                    <form action="{{ route('mmodul.store') }}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group {{ $errors->has('modulid') ? 'has-error' : '' }}">
                                            <label for="modulid" class="control-label">Modul ID</label>
                                            <input type="text" class="form-control" name="modulid" placeholder="Modul Name">
                                            @if ($errors->has('modulid'))
                                                <span class="help-block">{{ $errors->first('modulid') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('modul_name') ? 'has-error' : '' }}">
                                            <label for="modul_name" class="control-label">Modul Name</label>
                                            <input type="text" class="form-control" name="modul_name" placeholder="Modul Name">
                                            @if ($errors->has('modul_name'))
                                                <span class="help-block">{{ $errors->first('modul_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('mmodul.index') }}" class="btn btn-default">Back</a>
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

