<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $products = Product::all();
        $countTransactions = Transaction::all()->count();
        return view('owner.v_homepage', compact('products', 'countTransactions'));
    }
}
