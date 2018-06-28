<?php

namespace App\Http\Controllers;

use App\Project;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
use Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index()
    {
        $project = Project::join('client','project.clientid','=','client.clientid')
                            ->orderBy('projectid', 'asc')->paginate(5);
        return view('project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::select('client_name','clientid')->get();
        return view('project.create',['client' => $client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'projectid' => 'bail|required|max:5|unique:project,projectid',
            'project_name' => 'required|max:50'
        ]);

        $project = new Project;
        $project->projectid = Input::get('projectid');
        $project->project_name = Input::get('project_name');
        $project->clientid = Input::get('clientid');
        $project->save();

       return redirect()->route('project.index')->with('message', 'Project berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project'));
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
        $this->validate($request, [
            'project_name' => 'required|max:50'
        ]);
        $project = Project::findOrFail($id)->update($request->all());
        
        return redirect()->route('project.index')->with('message', 'Project berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id)->delete();
        return redirect()->route('project.index')->with('message', 'Project berhasil dihapus!');
    }
}
