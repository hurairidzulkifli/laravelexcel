<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PurchaseImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Purchase;


class PurchaseController extends Controller
{
    public function __construct()
	{
		return $this->middleware('auth');
	}
	
    public function index()
    {
    	$purchases = Purchase::all();
    	return view('purchases.index',compact('purchases'));
    }

    public function import()
    {
    	Excel::import(new PurchaseImport(), request()->file('import'));
    }
}
