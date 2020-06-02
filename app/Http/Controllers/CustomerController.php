<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Customer;

class CustomerController extends Controller
{

	public function __construct()
	{
		return $this->middleware('auth');
	}
	
    public function index()
    {
    	$customers = Customer::all();
    	return view('customers.index',compact('customers'));
    }

    public function export()
    {
    	return Excel::download(new CustomersExport(), 'customers.xlsx');
    }
}
