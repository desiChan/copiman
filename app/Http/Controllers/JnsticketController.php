<?php

namespace App\Http\Controllers;

use App\Jnsticket;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
//use Input;

class JnsticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	//	$jnsticket = Jnsticket::all();
		$jnsticket = Jnsticket::orderBy('jnsticket', 'asc')->paginate(5);
		return view('jnsticket.index', compact('jnsticket'));
		
		//$data = Jnsticket::get();
		//return $jnsticket;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jnsticket.create');
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
            'jnsticket' => 'bail|required|max:5|unique:jnsticket,jnsticket',
            'keterangan' => 'required|max:100',
			'otorisasi' => 'required|max:1'
        ]);
		
		$jnsticket = Jnsticket::create($request->all());

        return redirect()->route('jnsticket.index')->with('message', 'Modul berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jnsticket = Jnsticket::findOrFail($id);
        return view('jnsticket.show', compact('jnsticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jnsticket = Jnsticket::findOrFail($id);
        return view('jnsticket.edit', compact('jnsticket'));
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
            'keterangan' => 'required|max:100',
			'otorisasi' => 'required|max:1'
        ]);
		$jnsticket = Jnsticket::findOrFail($id)->update($request->all());
		
		return redirect()->route('jnsticket.index')->with('message', 'modul berhasil diubah!');
		
		/* alternatif
		return $request;
		$jnsticket = Jnsticket::findOrFail($id)->update($request->all());
		$jnsticket = Jnsticket::where('id',$id)->update(['modul_name' => $request->modul_name ]);
		ramadan pake $modulname = Input::get('modul_name');
		ramadan echo $modulname; gak di pake
		ramadan pake Jnsticket::where('id',$id)->update(['modul_name' => $modulname ]);
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
        $jnsticket = Jnsticket::findOrFail($id)->delete();
        return redirect()->route('jnsticket.index')->with('message', 'Modul berhasil dihapus!');
    }
}
