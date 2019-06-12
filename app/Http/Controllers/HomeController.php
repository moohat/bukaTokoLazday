<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Http\Resources\DetailsTransaction;
use App\Models\Product;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transactions = Transaction:: whereMonth('created_at',Carbon::now()->format('m'))->count();
        // $productsSale = DetailsTransaction::whereMonth('created_at',Carbon::now()->format('m'))->sum('qty');

        $productsSale = DB::table('details_transactions')->whereMonth('created_at',Carbon::now()->format('m'))->sum('qty');

        $customer = User::where('is_admin', false)->count();
        $products = Product::count();
        // dd($transactions, $product, $customer, $products);
        return view('admin.dashboard', compact('customer', 'products', 'transactions', 'productsSale'));
    }
}
