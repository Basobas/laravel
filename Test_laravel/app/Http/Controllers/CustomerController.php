<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer;

class CustomerController extends Controller
{
   public function customer($id){
       $customer = Customer::find($id);
       echo $customer->name;

       echo '<ul>';
       foreach($customer->orders as $order){
           echo '<li>' . $order->name . '</li>';
       }
       echo '</ul>';
   }
}
