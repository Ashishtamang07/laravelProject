<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->toArray());
        // creating Customer Model class object $customer.
        //assigning data from request to customer table through $customer object

        $customer = new Customer();
        $customer->customer_name = $request['customerName'];
        $customer->customer_address = $request['customerAddress'];
        $customer->country_name = $request['countryName'];
        $customer->state_name = $request['stateName'];
        $customer->save();
    }
}
