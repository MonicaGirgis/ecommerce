<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
use App\prod;

class prodCon extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index','show']);
    }

    //<!-- @if(!Auth::guest()&& Auth::user()->isAdmin==1) -->
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=prod::all();
        return view('Clothing-website.shop')->with('prods',$products);
    //    $products=prod::where('id','=',2)->get();
    //     return view('Clothing.index')->with('prods',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryies=cat::all();
        return view('Clothing.AddProd')->with('cats',$categoryies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return "22"
        $this->validate($request,[
            'product-id'=>'required|unique:prods,id|max:10',
            'product-name'=>'required|unique:prods,name|max:225',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',//2048=2M
            'product-price'=>'required|numeric',  //number validation
            'product-quantity'=>'required', //number validation
            'product-description'=>'required', //size validation
            'category_id'=>'required'//in cat id validation            
        ]);
        
        $prodImg=time() . '.' . $request->img->getClientOriginalExtension();
        $p = new prod();
        $p->id =$request->input('product-id');
        $p->name =$request->input('product-name');
        $p->des =$request->input('product-description');
        $p->available =$request->input('product-quantity');
        $p->price =$request->input('product-price');
        $p->img =$prodImg;
        $id=$request->input('category_id');
        $p->catId =$id;//delete
        $p->save();
        $request->img->move(public_path('uplaod'),$prodImg);
        $cat=cat::find($id);
        $cat->count =$cat->count+1;
        $cat->save();
        //return $p->cat->name . "  ". $cat->count;
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryies=cat::all();
        $prod=prod::find($id);
        return view('Clothing-website.editprod')->with(
            [
                'cats'=>$categoryies,
                'prod'=>$prod
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'product-id'=>'required|max:10',
            'product-name'=>'required|max:225',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',//2048=2M
            'product-price'=>'required|numeric',  //number validation
            'product-quantity'=>'required', //number validation
            'product-description'=>'required', //size validation
            'category_id'=>'required'//in cat id validation            
        ]);
        
        

        $prodImg=time() . '.' . $request->img->getClientOriginalExtension();
        $p = prod::find($id);
        $oldCatid=$p->catId;
        $p->id =$request->input('product-id');
        $p->name =$request->input('product-name');
        $p->des =$request->input('product-description');
        $p->available =$request->input('product-quantity');
        $p->price =$request->input('product-price');
        $p->img =$prodImg;
        $catid=$request->input('category_id');
        $p->catId =$catid;//delete
        $p->save();
        $request->img->move(public_path('uplaod'),$prodImg);
        if($oldCatid!=$catid)
        {
            
            $cat=cat::find($catid);
            $cat->count =$cat->count+1;
            $cat->save();
            
            $catold=cat::find($oldCatid);
            $catold->count =$catold->count-1;
            $catold->save();
        }
        //return $p->catId;
        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod=prod::find($id);
        $cat=cat::find($prod->catId);
        $cat->count =$cat->count-1;
        $cat->save();
        $prod->destroy($id);
        return redirect(route('cat.index'))->with('msg','OK delete');
    }
}
