@extends('copiman.index')
@section('content')

</section>
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Ticket Type</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>{{ $jnsticket->jnsticket }}</h4>
									<p>{{ $jnsticket->keterangan }}</p>
									<p>{{ $jnsticket->otorisasi }}</p>
									<a href="{{ route('jnsticket.index') }}" class="btn btn-default">Back</a>
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