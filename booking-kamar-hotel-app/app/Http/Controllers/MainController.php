<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('cashier.v_homepage', compact('products'));
    }

    public function order($productId){
        $product = Product::find($productId);
        return view('cashier.v_orderpage', compact('product'));
    }

    public function detailTransaction($transaksiId){
        $transaction = Transaction::find($transaksiId);
        $product = Product::find($transaction->id_produk);
        return view('cashier.v_detailTransaction', compact('transaction', 'product'));
    }
    public function orderProcessing(Request $request){

        if ($request->uang_bayar < $request->harga_product ) {
            # code...
            return \back()->with('kurang', 'uang pembayaran kurang');
        }

        function codeUnique($n) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
         
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
         
            return 'ORD-'.$randomString;
        }

        $transaction = Transaction::create([
            'id_produk' => $request->id_produk,
            'nama_pelanggan' => $request->fullName,
            'nomor_hp' => $request->noHP,
            'tgl_checkin' => $request->checkin,
            'nomor_unik' =>  codeUnique(6),
            'uang_bayar' => $request->uang_bayar,
            'uang_kembali' => $request->uang_bayar - $request->harga_product 
        ]);

        $product = Product::find($request->id_produk);

        $product->update([
            'tersedia' => $product->tersedia - 1
        ]);

        
        Log::create([
            'id_user' => Auth::user()->id,
            'activity' => 'transaksi pada id transaksi '.$transaction->id
        ]);

        return \redirect()->route('detail-transaction', $transaction->id);
    } 

    public function historyTransaction(){
        $transactions = Transaction::all();
        return view('cashier.v_historyTransactions', compact('transactions'));
    }
}
