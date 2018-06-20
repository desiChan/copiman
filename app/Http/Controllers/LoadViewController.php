<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mmodul;

class LoadViewController extends Controller
{

		public function __construct()
		    {
		        $this->middleware('auth');
		    }

		public function OpenViewTicket(){
			return view('copiman.ticket');
		}

    	
    	/*public function OpenViewMmodul(){
			$mmodul = Mmodul::orderBy('modulid', 'asc')->paginate(5);
		    return view('mmodul.index', compact('mmodul'));
		}*/
}
