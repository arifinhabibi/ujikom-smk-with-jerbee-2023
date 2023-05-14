<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();
        $countTransactions = Transaction::all()->count();
        return view('admin.v_homepage', compact('products', 'countTransactions'));
    }

    public function addRoom(){
        return view('admin.v_addRoom');
    }

    public function addRoomProcessing(Request $request){
        $product = Product::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'image_kamar' => $request->image_kamar,
            'ukuran_kasur' => $request->ukuran_kasur,
            'ukuran_kamar' => $request->ukuran_kamar,
            'maks' => $request->maks,
            'tersedia' => $request->tersedia
        ]);
        
        if ($request->hasFile('image_kamar')) {
            # code...
            $request->file('image_kamar')->move('assets/cashier/images/', $request->file('image_kamar')->getClientOriginalName());
            $product->image_kamar = $request->file('image_kamar')->getClientOriginalName();
            $product->save();
        }

        return \redirect()->route('admin-home');
    }

    public function deleteRoom($productId){
        $product = Product::find($productId);

        $product->delete();

        return \redirect()->route('admin-home')->with('deleteRoom', 'menghapus produk berhasil');
    }
}
