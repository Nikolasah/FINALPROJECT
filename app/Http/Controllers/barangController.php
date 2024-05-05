<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;


class barangController extends Controller
{
    //
    public function Addbarang(){
        $this->authorize('is_admin');


        return view('addbarang');
    }
    

    public function Storebarang(Request $request) {

        barang::create([
            'barangTitle' => $request->judulbarang,
            'name' => $request->name,
            'price' => $request->harga,
            'kodePos' => $request->kodepos,
        ]);
        return redirect('/');
    }

    public function ViewAllbarang() {

        $barangs = barang::all();

        return view('welcome')->with('barang_barang', $barangs);
    }

    public function Viewbarang($id){
        $barang = barang::findOrFail($id);

        return view('barangDetail')->with('barang', $barang);
    }

    public function viewUpdatebarang($id){
        $barang = barang::findOrFail($id);

        return view('updatebarang')->with('barang', $barang);
    }

    public function saveUpdate($id, Request $request){
        $barang = barang::findOrFail($id)->update([
            'barangTitle' => $request->judulbarang,
            'author' => $request->author,
            'price' => $request->harga,
            'releaseDate' => $request->tanggalRilis,
        ]);
        return redirect('/');
    }

    public function deletebarang($id){
        barang::destroy($id);

        return redirect('/');
    }

}
