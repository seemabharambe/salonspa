<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salon;

class SalonController extends Controller
{
    
   public function insert(Request $r)
   {
	   $s=new Salon;

	   $s->name=$r->name;

 	   $s->email=$r->email;
 	  
 	   $s->phone=$r->phone;
 	  
 	   $s->message=$r->message;

       $s->chooseservice=$r->chooseservice;
  
       $s->date=$r->date;
 	  
 	   $s->save();
 	  // return $s;

       return redirect('/');


    }
   

   public function display()
   {
   	$data=Salon::all();

   	//return $data;
   	 return view('dashboarda',compact("data"));
   }

  
    public function delete($id)
    {
           // return $id;
             Salon::find($id)->delete();
               return redirect('dashboarda');
      
    }

     public function edit($id)
     {
      $record=Salon::find($id);

     // return $record;

      return view('edit',compact("record"));
     }

    
    public function updaterecord($id,Request $r)
    {
              
         $record=Salon::find($id);

           $record->name=$r->name;
          $record->email=$r->email;
          $record->phone=$r->phone;
           $record->message=$r->message;

          $record->chooseservice=$r->chooseservice;
          $record->date=$r->date;
       
             $record->save();

              return redirect('dashboarda');
     }









}
