<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
use App\prod;
use App\User;
use App\prod_user;


class ecom extends Controller
{
    public function show($id)
    {
        $products=prod::where('catId','=',$id)->get();
        $categoryies=cat::all();
        return view('Clothing-website.categories')->with(
            [
                'cats'=>$categoryies,
                'prods'=>$products
            ]
        );
    }
    public function cat()
    {
        // $categoryies=cat::all();
        // return view('layouts.cat')->with(
        //     [
        //         'cats'=>$categoryies,
        //     ]
        // );
    }

    public function sales()
    {
        $prodsf=prod::where('available','=',0)->get();
        $prods0=prod::where('sale','=',0)->get();
        //$prodlast=prod::latest()->first();
        $prodbest=prod::orderBy('sale','desc')->first();
        return view('Clothing-website.sales')->with(
            [
                'prodsf'=>$prodsf,
                'prods0'=>$prods0,
               // 'cats'=>$prodlast,
                'prodbest'=>$prodbest
            ]
        );
    }
    
    
    
    
    
    
    public function testPU()
    {
        $prod1=prod::where('id' ,"=", 1)->first();
        $prod2=prod::where('id' ,"=", 2)->first();
        $prod3=prod::where('id' ,"=", 3)->first();
        $user1=User::where('id' ,"=", 1)->first();
        $user2=User::where('id' ,"=", 2)->first();
        
        
        $up=new prod_user();
        $up->user_id=$user1->id;
        $up->prod_id=$prod1->id;
        $up->save();
        $up2=new prod_user();
        $up2->user_id=$user1->id;
        $up2->prod_id=$prod3->id;
        $up2->save();
        
        $up3=new prod_user();
        $up3->user_id=$user2->id;
        $up3->prod_id=$prod1->id;
        $up3->save();
        $up4=new prod_user();
        $up4->user_id=$user2->id;
        $up4->prod_id=$prod2->id;
        $up4->save();
        echo $user2->prods;
        echo "prod3".$prod3->users;
        //return view('Clothing.testPU')->with('user',$user);
    }
}
