<?php

namespace App\Http\Controllers;

use App\Mmenu;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
//use Input;

class MmenuController extends Controller
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
	//	$mmenu = Mmenu::all();
		$mmenu = Mmenu::orderBy('menuid', 'asc')->paginate(5);
		return view('mmenu.index', compact('mmenu'));
		
		//$data = Mmenu::get();
		//return $mmenu;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mmenu.create');
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
            'menuid' => 'bail|required|size:5|unique:mmenu,menuid',
            'menu_name' => 'required|max:100'
        ]);
		
		$mmenu = Mmenu::create($request->all());

        return redirect()->route('mmenu.index')->with('message', 'Menu berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mmenu = Mmenu::findOrFail($id);
        return view('mmenu.show', compact('mmenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mmenu = Mmenu::findOrFail($id);
        return view('mmenu.edit', compact('mmenu'));
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
            'menu_name' => 'required|max:100'
        ]);
		$mmenu = Mmenu::findOrFail($id)->update($request->all());
		
		return redirect()->route('mmenu.index')->with('message', 'Menu berhasil diubah!');
		
		/* alternatif
		return $request;
		$mmenu = Mmenu::findOrFail($id)->update($request->all());
		$mmenu = Mmenu::where('id',$id)->update(['menu_name' => $request->menu_name ]);
		ramadan pake $menuname = Input::get('menu_name');
		ramadan echo $menuname; gak di pake
		ramadan pake Mmenu::where('id',$id)->update(['menu_name' => $menuname ]);
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
        $mmenu = Mmenu::findOrFail($id)->delete();
        return redirect()->route('mmenu.index')->with('message', 'Menu berhasil dihapus!');
    }
}
