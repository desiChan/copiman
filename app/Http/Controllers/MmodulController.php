<?php

namespace App\Http\Controllers;

use App\Mmodul;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
//use Input;

class MmodulController extends Controller
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
	//	$mmodul = Mmodul::all();
		$mmodul = Mmodul::orderBy('modulid', 'asc')->paginate(5);
		return view('mmodul.index', compact('mmodul'));
		
		//$data = Mmodul::get();
		//return $mmodul;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mmodul.create');
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
            'modulid' => 'bail|required|max:5|unique:mmodul,modulid',
            'modul_name' => 'required|max:100'
        ]);
		
		$mmodul = Mmodul::create($request->all());

        return redirect()->route('mmodul.index')->with('message', 'Modul berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mmodul = Mmodul::findOrFail($id);
        return view('mmodul.show', compact('mmodul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mmodul = Mmodul::findOrFail($id);
        return view('mmodul.edit', compact('mmodul'));
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
            'modul_name' => 'required|max:100'
        ]);
		$mmodul = Mmodul::findOrFail($id)->update($request->all());
		
		return redirect()->route('mmodul.index')->with('message', 'modul berhasil diubah!');
		
		/* alternatif
		return $request;
		$mmodul = Mmodul::findOrFail($id)->update($request->all());
		$mmodul = Mmodul::where('id',$id)->update(['modul_name' => $request->modul_name ]);
		ramadan pake $modulname = Input::get('modul_name');
		ramadan echo $modulname; gak di pake
		ramadan pake Mmodul::where('id',$id)->update(['modul_name' => $modulname ]);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mmodul = Mmodul::findOrFail($id)->delete();
        return redirect()->route('mmodul.index')->with('message', 'Modul berhasil dihapus!');
    }
}
