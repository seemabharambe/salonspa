<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\getin;

class GetConroller extends Controller
{
    
	//contactpage

    public function getintouch(Request $r)
    {
       // return $r->input();
      $g=new getin;

     $g->nam=$r->nam;

     $g->mail=$r->mail;
    
     $g->sub=$r->sub;
    
     $g->msg=$r->msg;

     $g->save();
     //return $g;
   return redirect('contact');
    }


   public function displayget()
   {
   	$gt=getin::all();
   	//return $gt;
     return view('dashboardget',compact("gt"));
   }
	


	public function  erase($rid)
	{

		//return $rid;
		getin::find($rid)->delete();
        
	}
	


	public function editget($rid)
	{
		$da=getin::all();

		//return $data;

		return view('editgetdata',compact("da"));
	}


	public function updateget(Request $r,$rid)
	{

		$data=getin::find($rid);

		$data->nam=$r->nam;
		$data->mail=$r->mail;
		$data->sub=$r->sub;
		$data->msg=$r->msg;
		$data->save();
         
         return redirect('dashboardg');

	}



}
