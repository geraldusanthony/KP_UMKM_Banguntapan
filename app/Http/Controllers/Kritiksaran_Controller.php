<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;
use PDF;

class Kritiksaran_Controller extends Controller
{
    public function kritiksaran(Request $request){ 
        kritiksaran::create($request->all());
        return redirect('profil')->with('sukses','Data Telah Di Tambah!');   
    }
    
    public function cetak_pdf()
    {
    	$kritiksaran = kritiksaran::all();
 
    	$pdf = PDF::loadview('admin.kritiksaran_pdf',['kritiksaran'=>$kritiksaran]);
    	return $pdf->stream();
    }
}
