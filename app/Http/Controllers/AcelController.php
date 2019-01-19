<?php

namespace App\Http\Controllers;

use App\Log;
use App\acel;
use App\LogView;
use App\Mmodul;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
use Input;

class AcelController extends Controller
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
        $log = LogView::orderBy('logid', 'asc')->paginate(5);
        return view('log.index',['log' => $log]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modul = Mmodul::select('modul_name','modulid')->get();
        return view('log.create',['modul' => $modul]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $logid = Input::get('logid');
        // $path = 'upload/file/'.$logid;
        // File::makeDirectory($path,$mode = 0777, true, true);
        // $destionationPath = 'upload/file/'.$logid;
        // $nama = $logid;
       // $this->validate($request, [
       //      'logid' => 'bail|required|max:5|unique:log,logid',
       //      'function' => 'required|max:100',
       //      'modulid' => 'required|max:225',
       //      'prosedure' => 'required|max:20',
       //      'mou_date' => 'required',
       //      'keterangan' => 'required|max:50'
       //  ]);

        $log = new acel;
        $log->logid = Input::get('logid');
        $log->field = Input::get('field');
        $log->function = Input::get('function');
        $log->modulid = Input::get('modul_name');
        $log->prosedure = Input::get('prosedure');
        $log->mou_date = Input::get('mou_date');
        $log->keterangan = Input::get('keterangan');
        $log->save();

       return redirect()->route('log.index')->with('message', Input::get('Berhasil Disimpan!'));
    }
 // xattr_get(filename, name)
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$log = acel::findOrFail($id);
        return view('log.show', compact('log'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
		 $log = acel::findOrFail($id);
        return view('log.edit', compact('log'));
		
		// $client = Client::select('client_name','clientid')->get();
        // return view('project.create',['client' => $client]);
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
            'function' => 'required|max:100'
        ]);
        $log = acel::findOrFail($id)->update($request->all());
        
        return redirect()->route('log.index')->with('message', 'Log berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $log = acel::findOrFail($id)->delete();
        return redirect()->route('log.index')->with('message', 'Log berhasil dihapus!');
    }
}
