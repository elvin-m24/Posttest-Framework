<?php

namespace App\Http\Controllers;

use App\Models\pesawat;
use App\Models\tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class TiketController extends Controller
{
    public function index(){
        return view('tiket', [
            'tikets' => tiket::all(),
            'title' => 'Tiket'
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('tikets')->insert([
            'kodetiket' => $request->kodetiket, 
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,                        
            'pesawat_id' => $request->pesawat_id,
            'harga' => $request->harga,
        ]);
        
        return redirect('/tiket')->with('Keberangkatan Telah Ditambah.');
    }

    public function show($id){
        $tiket = DB::table('tikets')->where('id', $id)->get();

        return view('show', [
            'title' => 'Tiket',
            'tikets' => $tiket
        ]);
    }

    public function edit($id)
    {        
		$tiket = DB::table('tikets')->where('id', $id)->get();

		return view('edit',['tikets' => $tiket]);
    }

    public function update(Request $request, tiket $tiket)
    {
        DB::table('tikets')->where('id',$request->id)->update([        
            'kodetiket' => $request->kodetiket, 
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,                        
            'pesawat_id' => $request->pesawat_id,
            'harga' => $request->harga,			
		]);        
	
		return redirect('/tiket')->with('Berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table('tikets')->where('id',$id)->delete();

		return redirect('/tiket');
    }

}
