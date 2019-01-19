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

class UpdateController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $update_ticket = TicketView::orderBy('ticketid', 'asc')->paginate(5);
        return view('update_ticket.index', compact('update_ticket'));
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
        $ticket->status_ticket = "0";
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
        $ticket = Ticket::findOrFail($id);
        $project = Project::select('project_name','projectid')->get();
        $modul = Mmodul::select('modul_name','modulid')->get();
        $jnsticket = Jnsticket::select('keterangan','jnsticket')->get();
        return view('ticket.show', ['ticket' => $ticket,'project' => $project,'modul' => $modul,'jnsticket' => $jnsticket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_ticket = Ticket::findOrFail($id);
        $project = Project::select('project_name','projectid')->get();
        $modul = Mmodul::select('modul_name','modulid')->get();
        $jnsticket = Jnsticket::select('keterangan','jnsticket')->get();
        return view('update_ticket.edit', ['update_ticket' => $update_ticket,'project' => $project,'modul' => $modul,'jnsticket' => $jnsticket]);    
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
        /*$this->validate($request, [
            'project_name' => 'required|max:50'
        ]);
        $project = Project::findOrFail($id)->update($request->all());
        
        return redirect()->route('project.index')->with('message', 'Project berhasil diubah!');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id)->delete();
        return redirect()->route('ticket.index')->with('message', 'Ticket berhasil dihapus!');
    }
}
