<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\Product;
use App\City;

class TestController extends Controller
{

public function selectModel() {

           $product = new Product() ; 
		 
		 //Fetch the Records 
		 
		 
		  // $data= $product->all() ; 
		  
		 //  $data= $product->first() ; 
		   
		   //print_r($data) ; 
		   
		   //echo $data["id"]; 
		   
		   //$data= $product->where(["id"=>2])->first() ; 
		     //$data= $product->orderBy("id" , "desc")->first() ; 
			 
			  // $data= $product->find(1)->first() ; 
		   
		 //  echo $data["id"]; 
		  //foreach($data as $key=>$value) 
		  //{
		  
		      //  echo $value["id"]."    " . $value["name"] . "<br>" ; 
		  //}
		  
		  //update the records 
		  
		 //$product = new Product() ;  
		 
		 //$data = $product->find(1) ; 
		 
		 //$data->name="New Hello Mobile" ; 
		 
		 //$data->save() ; 
		 
		 //inser the record
		 
		 //$product = new Product() ; 
		 //$product->name="first Mobile" ; 
		 //$product->quantity=5; 
		 //$product->description="This is a descripton of product" ;
		  
		 //$product->save() ; 
		 
		 $product = new Product() ; 
		 
		 $data = $product->find(3) ; 
		 
		 $data->delete() ; 
	 
	}
	

	public function insertrec() {

         $product = new Product() ; 
		 
		 $product->name="Q Mobile" ; 
		 $product->quantity=2 ; 
		 $product->description="This is a descripton of product" ;
		  
		 $product->save() ; 

	}
	
	public function insertrec2() {

         $city = new City() ; 
		 
		 $city->name="Q Mobile" ; 
		 $city->quantity=2 ; 
		 $city->description="This is a descripton of product" ;
		  
		 $city->save() ; 

	}
	
    public function condition()
			 {
			 
			    $name="Syed Muhammad Farhan Ahmed" ; 
				
				$nam=["name" , "far" , "FFF"] ; 
				
				$names=["farhan" , "IGI" , "LIFE" , "KARACHI"] ; 
			 
			    return view("test.condition" , compact("name" , "names")) ; 
			
			
			}	
			
			public function queryrun() {
			
			
	/*		   $data = DB::table("user1")->insert([
			                                    ["name"=>"Hell World"] , 
												["name"=>"Hell World2"] , 
												["name"=>"Hell World3"] 
												]
												
												
												) ; 
			   
			    echo $data ; 
				*/
			//	$data = DB::table("user1")->orderBy("id"  , "DESC")->get() ; 
			
			//$data = DB::table("user1")->where(["id"=>2])->get() ; 
				
				//print_r($data) ; 
				
				//return view("test.query" , compact("data"));
				
			//$data = DB::table("user1")->where(["id"=>2])->delete() ; 
			/*
			$data = DB::table("user1")->where(["id"=>3])->update(
			 [
			    "name"=>"Checking"
			 
			 ]
			
			) ; 
				
			
			*/
			//$data = DB::table("user1")->count() ; 
			
			//$data = DB::table("user1")->pluck("name") ; 
			
			//$data = DB::table("user1")->select("name")->get() ; 
			
			//echo $data ; 
			}
			
			
		public function myForm() {
		
		   return view("form.myform") ; 
		}	
		
		public function submitmyform(Request $request) {
		
		     //print_r($request->all()) ; 
			 
			 $this->validate($request  , [
			     
				  "name"=>"Required" 
			 
			 ] , [
			 
			        "name.required"=>"The name shou;d be filled" 
			 ] ) ; 
			 
			 
		
		
		}
			
			
}
