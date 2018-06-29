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
                                        <h2 class="title-1">Modul</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>{{ $mmodul->modulid }}</h4>
									<p>{{ $mmodul->modul_name }}</p>
									<a href="{{ route('mmodul.index') }}" class="btn btn-default">Back</a>
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