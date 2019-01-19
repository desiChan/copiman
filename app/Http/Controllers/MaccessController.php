<?php

namespace App\Http\Controllers;

use App\Maccess;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
use Validator;
use Input;

class MaccessController extends Controller
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
        $maccess = Maccess::orderBy('group_menu', 'asc')->paginate(5);
        return view('maccess.index', compact('maccess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maccess.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $group_menu = Input::get('group_menu');
        $menuid = Input::get('menuid');

         $validator = Validator::make($request->all(), [
                    'group_menu' => 'unique:maccess,group_menu,NULL,id,menuid',
                    'menuid' => 'unique:maccess,menuid,NULL,id,group_menu'

                ]);

               if($validator->fails()) {
                    return "validasi gagal";
                             
                }

        return "validasi berhasil";
/*
        $this->validate($request, [
            
        ]);*/
        
       /* $maccess = Maccess::create($request->all());

        return redirect()->route('maccess.index')->with('message', 'Akses Menu Baru berhasil dibuat!');*/
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
