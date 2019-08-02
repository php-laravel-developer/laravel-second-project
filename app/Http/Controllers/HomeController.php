<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
   
    echo "This is our first controller"; 
	}
	
	 public function call(){ 
	 
	 $data['user']=["Farhan1" , "John" , "Milley" , "Smith"] ; 
	 
	  $users=["Farhan1" , "John" , "Milley" , "Smith"] ; 
	   
	   $name="Syed Muhammad Farhan Ahmd" ; 
	 
	 //return view("call" , array("users"=>$users); 
	 
	  //return view("call" , $data); 
	  
	   //return view("call" , compact("users" , "name")); 
	   
	   //return view("call")->with(["users"=>$users , "name"=>$name]); 
	   
	   return view("call")->withusers($users)->withname($name); 
	     
       }
	   
	   public function services(){ 
	 
	       return view("home.services"); 
	     
       }
	   public function product(){ 
	 
	       return view("home.products"); 
	     
       }
	   public function team(){ 
	 
	       return view("home.team"); 
	     
       }
}	   
	   
