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
    public function getCustomer($id){
      $customer =  DB::table('customers')->where('id', $id)->first();
      return view('customers/customer', ['customer' => $customer]);
    }
    public function addCustomer(){

    }
}
