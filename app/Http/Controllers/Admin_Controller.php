<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;

class Admin_Controller extends Controller
{
    public function admin(){
        return view('admin.home');
    }

    public function home(){
        return view('admin.home');
    }

    public function kritiksaran(request $request){
        $kritiksaran = kritiksaran::all();
        return view('admin.kritiksaran',compact('kritiksaran'));
    }

}
