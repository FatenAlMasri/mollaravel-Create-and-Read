<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;

class CasesController extends Controller
{
   public function index()
   {
   	$c =new Cases();
   	$cases=$c::all();
   //dd($cases);
   	//return view('manage_Cases');
   	 return view('manage_Cases',compact('cases'));
   	 
   }

   public function store(Request $request)
   {
   	 $validatedData = $request->validate([
        'case_entry' => 'required',
        'case_type' => 'required',
        'case_desc' => 'required',
        'direct_name' => 'required',
        'case_emp_note'=>'required',
        'case_status' =>'required',
        'case_priority'=>'required'
        
    ]);

   	 $c =new Cases();
   	 
   	 $c->case_entry    =$request->case_entry;
   	 $c->case_type     =$request->case_type;
     $c->case_desc     =$request->case_desc;
     $c->direct_name   =$request->direct_name;
     $c->case_emp_note =$request->case_emp_note;
     $c->case_status   =$request->case_status;
     $c->case_priority =$request->case_priority;
     
         
   	 $c->save();
   	 return redirect('/manage_Cases');

   }
}
