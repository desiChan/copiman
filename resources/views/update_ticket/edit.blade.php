@extends('copiman.index')
@section('content')
    <section>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>Edit Ticket</h4>
                                    <form action="{{ route('update_ticket.update', $update_ticket->ticketid) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('ticketid') ? 'has-error' : '' }}">
                                            <label for="ticketid" class="control-label">Tikcet ID</label>
                                            <input type="text" class="form-control" value="{{$update_ticket->ticketid}}" name="ticketid" placeholder="Tikcet ID" readonly>
                                            <!-- @if ($errors->has('projectid'))
                                                <span class="help-block">{{ $errors->first('projectid') }}</span>
                                            @endif -->
                                        </div>
                                        <div class="form-group {{ $errors->has('projectid') ? 'has-error' : '' }}">
                                            <label for="projectid" class="control-label">Project</label>
                                            <select class="form-control" name="project_name" id="project">
                                                @foreach($project as $projectid)
                                                    <option value="{{$update_ticket->project_name}}"
                                                        @if($update_ticket->project == $projectid->project_name))
                                                            selected
                                                        @endif>
                                                        {{$update_ticket->project_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group {{ $errors->has('modulid') ? 'has-error' : '' }}">
                                            <label for="modulid" class="control-label">Modul</label>
                                            <select class="form-control" name="modul_name" id="modul">
                                                    @foreach($modul as $modul_name)
                                                    <option value="{{$modul_name->modulid}}"
                                                        @if($update_ticket->modulid == $modul_name->modulid))
                                                            selected
                                                        @endif>
                                                        {{$modul_name->modul_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group {{ $errors->has('jnsticket') ? 'has-error' : '' }}">
                                            <label for="jnsticket" class="control-label">Jenis Ticket</label>
                                            <select class="form-control" name="jnsticket" id="jenis_ticket" readonly>
                                                @foreach($jnsticket as $tiket)
                                                    <option value="{{$tiket->jnsticket}}">{{$tiket->keterangan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group {{ $errors->has('dateline_client') ? 'has-error' : '' }}">
                                            <label for="dateline_client" class="control-label">Dateline</label>
                                            <input type="date" class="form-control" value="{{$update_ticket->dateline_client}}" name="dateline_client" placeholder="Dateline" readonly>
                                        </div>
                                        <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="keterangan" class="control-label">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" value="{{$update_ticket->keterangan}}" placeholder="Keterangan" rows="5"></textarea>
                                        </div>
                                          <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                            <label for="gambar" class="control-label">Gambar</label><br/>
                                            <input type="file" name="gambar" id="gambar" multiple onchange="validate2(this.value)"  class="btn-success">
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('ticket.index') }}" class="btn btn-danger">Back</a>
                                        </div>
    <!--      -->
    @endsection
    