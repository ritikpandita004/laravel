<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
     public function index(){
       $url=url("/customer"); 
      $data=compact("url");
       return view("form")->with($data);
     }

     public function store(Request $request){
     
   
      
      //   $request->validate(
         //   ["name"=>"required","email"=> "required|email","password"=> "required|confirmed","password_confirmation=>required"],
         // password confirmation will only work if we have wriiten password_confirmation in both here also and in html name and id as it is laravel standards.
         
         
         
         
         //Insert query       
         $Customer= new Customer;
         $Customer->name=$request['name'];
         $Customer->email=$request['email'];
         $Customer->gender=$request['gender'];
         $Customer->dob=$request['date'];
         $Customer->address=$request['address'];
         $Customer->save();
         return redirect("/customer/view");

}
public function view(){
   $customer=customer::all();
   $data=compact("customer");
   return view("customer-view")->with($data);
   
}
public function delete($id){
  
   $customer=Customer::find($id);
   if(!is_null($customer)){
      $customer->delete();
   }
      return redirect("/customer/view");
   

}
public function edit($id){
  
   $customer=Customer::find($id);
   if(!is_null($customer)){

   $url=url('customer/update') .'/'.$id;
   $data=compact("customer","url");

   return view("form")->with( $data );

}else{
   return redirect("customer");
}
}
public function update($id,Request $request){

   $customer=Customer::find($id);
   $customer->name=$request['name'];
   $customer->email=$request['email'];
   $customer->gender=$request['gender'];
   $customer->dob=$request['date'];
   $customer->address=$request['address'];
   $customer->save();
   return redirect("/customer/view");
}
}