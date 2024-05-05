<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\barang;
use App\Models\barangWarehouse;

class WarehouseController extends Controller
{
    //
    public function viewAddWarehouse(){
        return view('addWarehouse');
    }

    public function store(Request $req){
        Warehouse::create([
            'address' => $req->alamat,
            'phoneNum' => $req->noTelp,
        ]);

        return redirect('/');
    }

    public function viewbarangToWh($id){
        $barang = barang::findOrFail($id);
        $warehouses = Warehouse::all();

        return view('addbarangWh')->with('barang', $barang)->with('warehouses', $warehouses);
    }

    public function storebarangToWh($id, Request $req){

        barangWarehouse::create([
            'barang_id' => $req->idbarang,
            'warehouse_id' => $req->WH,
        ]);

        return redirect('/');
    }

    public function detail(){
        $warehouses = Warehouse::with('barangList')->get();

        return view('warehouseDetail')->with('warehouses', $warehouses);
    }
}
