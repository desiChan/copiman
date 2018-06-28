<?php

namespace App\Http\Controllers;
use App\Ticket;
use App\TicketView;
use App\Project;
use App\Mmodul;
use App\Jnsticket;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
use Input;
use Carbon;
use DB;
use File;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = TicketView::orderBy('ticketid', 'asc')->paginate(5);
        return view('ticket.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::select('project_name','projectid')->get();
        $modul = Mmodul::select('modul_name','modulid')->get();
        $jnsticket = Jnsticket::select('keterangan','jnsticket')->get();
        return view('ticket.create',['project' => $project,'modul' => $modul,'jnsticket' => $jnsticket]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticketid = Input::get('ticketid');
        $path = 'images/ticket/'.$ticketid;
        File::makeDirectory($path,$mode = 0777, true, true);
        $destionationPath = 'images/ticket/'.$ticketid;
        $nama = $ticketid;
      


        $ticket = new Ticket;
        $ticket->ticketid = Input::get('ticketid');
        $ticket->projectid = Input::get('project_name');
        $ticket->modulid = Input::get('modul_name');
        $ticket->jnsticket = Input::get('jnsticket');
        $ticket->dateline_client = Input::get('dateline_client');
        $ticket->keterangan = Input::get('keterangan');
        $ticket->rate = 0;
        $ticket->user_create = "DESI";
        $ticket->status_ticket = "1";
        $ticket->dupd =  Carbon\Carbon::now();     
        $ticket->save();


        if(Input::hasFile('gambar')){
                $file = Input::file('gambar');
                $extensi = Input::file('gambar')->getClientOriginalExtension();
                $filename = 'Image'.'.'.$extensi;
                $file->move($destionationPath, $filename);

                $images = new Image;
                $images->ticketid = $ticketid;
                $images->img_name = $filename;
                $images->save();
            
        } 

       return redirect()->route('ticket.index')->with('message', 'Ticket berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
