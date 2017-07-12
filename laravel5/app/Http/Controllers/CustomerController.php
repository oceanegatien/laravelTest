<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller{
    public function getAllCustomers(){
      $customers =  DB::table('customers')->get();
      return view('customers/customers', ['customers' => $customers]);

    }
    public function getCustomer(){
      echo "get customer";
    }
    public function addCustomer(){
      echo "add customer";
    }
}
