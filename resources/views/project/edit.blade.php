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
                                    <form action="{{ route('project.update', $project->projectid) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('project_name') ? 'has-error' : '' }}">
                                            <label for="project_name" class="control-label">Project Name</label>
                                            <input type="text" class="form-control" name="project_name" placeholder="project_name" value="{{ $project->project_name }}">
                                            @if ($errors->has('project_name'))
                                                <span class="help-block">{{ $errors->first('project_name') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('clientid') ? 'has-error' : '' }}">
                                            <label for="clientid" class="control-label">Client</label>
                                            <select class="form-control" name="clientid" id="client">
											@foreach($client as $key => $value)
                                                    <option value="{{$key}}"
													@if ($key == old('myselect', $model->option))
														selected="selected"	
													@endif													
													{{$project->client_name}}>{{ $key->client_name }}</option>
                                            @endforeach
                                            </select>
											
											
											
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <a href="{{ route('project.index') }}" class="btn btn-default">Back</a>
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