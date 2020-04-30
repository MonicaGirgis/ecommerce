<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cat;
use App\prod_user;
use App\prod;

class buying extends Controller
{
    public function getSession(Request $req,$id){
        if($req->session()->has($id))
            print_r($req->session()->get($id));
    }

    public function setSession(Request $req,$id,$qty=1){
            //$req->session()->flush();
            //print_r($req->session()->all());
        if($req->session($id))
        {
            $q=$req->session()->pull($id);
            $qty=$qty+$q;
            $req->session()->forget($id);
            $req->session()->put($id,$qty);
        }
        else
        {
            $req->session()->put($id,$qty);
        }
        return redirect()->back();
        //return $id;
    }

    public function forgetSession(Request $req,$id){

        if($req->session($id))
             $req->session()->forget($id);
         
         return redirect()->back();
    }


    public function pageCart()
    {
        $temp=0;
        $products=prod::all();
        return view('Clothing-website.cart')->with(
            [
                'prods'=>$products,
                'temp'=>$temp
            ]);
    }

    public function allSession(Request $req){

            foreach(session()->all() as $key => $obj)
            {
                $prod =new prod();
                $prod=prod::where('name','=',$key)->get()->first();
                $p = new prod_user();
            if($prod['id']){
                 $p->prod_id =$prod['id'];
                 $p->quantity =$obj;
                 $p->user_id=1;
                // print_r($prod['id']);
                 //echo "<br>";
                 $p->save();
                }
            }
        $req->session()->flush();   
        return redirect()->back();
    }

    public function update(Request $req){
        
        print_r( $req->all());

       // $prods=prod::all();
       // print_r($req -> parameter);
       // foreach($prods as $prod)
       // foreach($req->all() as $key => $obj){
                //$req->session()->forget($key);
                ///$req->session()->put($key,$req->input($key));
              //  echo $key."<br>";
             //   print_r( $req->input("Blue_Dress"));
            //echo "hhhhhh<br>";

            
      //  }
        //return redirect(route('cart'));
    }

}
