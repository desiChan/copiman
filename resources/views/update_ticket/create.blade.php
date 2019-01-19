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
                                <h4>Add Ticket</h4>
                                    <form name="createTicket" id="createTicket" role="form" action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data" files="true">
                                        {{csrf_field()}}
                                        <div class="form-group {{ $errors->has('ticketid') ? 'has-error' : '' }}">
                                            <label for="ticketid" class="control-label">Tikcet ID</label>
                                            <input type="text" class="form-control" name="ticketid" placeholder="Tikcet ID">
                                            <!-- @if ($errors->has('projectid'))
                                                <span class="help-block">{{ $errors->first('projectid') }}</span>
                                            @endif -->
                                        </div>
                                        <div class="form-group {{ $errors->has('projectid') ? 'has-error' : '' }}">
                                            <label for="projectid" class="control-label">Project</label>
                                            <select class="form-control" name="project_name" id="project">
                                                @foreach($project as $project_name)
                                                    <option value="{{$project_name->projectid}}">{{$project_name->project_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group {{ $errors->has('modulid') ? 'has-error' : '' }}">
                                            <label for="modulid" class="control-label">Modul</label>
                                            <select class="form-control" name="modul_name" id="modul">
                                                    @foreach($modul as $modul_name)
                                                    <option value="{{$modul_name->modulid}}">{{$modul_name->modul_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group {{ $errors->has('jnsticket') ? 'has-error' : '' }}">
                                            <label for="jnsticket" class="control-label">Jenis Ticket</label>
                                            <select class="form-control" name="jnsticket" id="jenis_ticket">
                                                @foreach($jnsticket as $tiket)
                                                    <option value="{{$tiket->jnsticket}}">{{$tiket->keterangan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group {{ $errors->has('dateline_client') ? 'has-error' : '' }}">
                                            <label for="dateline_client" class="control-label">Dateline</label>
                                            <input type="date" class="form-control" name="dateline_client" placeholder="Dateline">
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="keterangan" class="control-label">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" placeholder="Keterangan" rows="5"></textarea>
                                        </div>
                                          <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="gambar" class="control-label">Gambar</label><br/>
                                            <input type="file" name="gambar" id="gambar" multiple onchange="validate2(this.value)"  class="btn-success">
                                        </div>
                                        <!--<div class="form-group {{ $errors->has('user_create') ? 'has-error' : '' }}">
                                            <label>User Create</label>
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label>User Approve</label>
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label>User Handle</label>
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label>Status Ticket</label>
                                        </div> -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('ticket.index') }}" class="btn btn-danger">Back</a>
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
