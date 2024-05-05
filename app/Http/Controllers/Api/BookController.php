<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class barangController extends Controller
{
    //
    public function viewAll(){
        $barangs = barang::all();

        if($barangs->count() > 0){
            return response()->json([
                "status" => "200",
                "barangs" => $barangs
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "barang not found"
            ], 404);
        } 
    }

    public function create(Request $req){
        $validate = Validator::make($req->all(), [
            'barangTitle' => "required",
            'author' => "required",
            'price' => "required",
            'releaseDate' => "required",
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => "422",
                "error_message" => $validate->messages()
            ], 422);
        } else {
            barang::create([
                'barangTitle' => $req->barangTitle,
                'author' => $req->author,
                'price' => $req->price,
                'releaseDate' => $req->releaseDate,
            ]);

            return response()->json([
                "status" => "200",
                "message" => "barang has been created" 
            ], 200);
        }
    }

    public function update($id, Request $req){
        $validate = Validator::make($req->all(), [
            'barangTitle' => "required",
            'author' => "required",
            'price' => "required",
            'releaseDate' => "required",
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => "422",
                "error_message" => $validate->messages()
            ], 422);
        }

        $barang = barang::find($id);

        if($barang){
            $barang->update([
                'barangTitle' => $req->barangTitle,
                'author' => $req->author,
                'price' => $req->price,
                'releaseDate' => $req->releaseDate,
            ]);

            return response()->json([
                "status" => "200",
                "message" => "barang has been updated"
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "barang not found"
            ], 404);
        }
    }

    public function delete($id){
        $barang = barang::find($id);

        if($barang){
            barang::destroy($id);

            return response()->json([
                "status" => "200",
                "message" => "barang has been deleted",
                "jhwafk" => "awkrghkawg"
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "barang not found"
            ], 404);
        }
    }

    public function show($id){
        $barang = barang::find($id);

        if($barang){
            return response()->json([
               "status" => "200",
               "barang" => $barang, 
            ]);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "barang not found"
            ], 404);
        }

    }




}
