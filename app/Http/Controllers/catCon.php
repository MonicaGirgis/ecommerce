<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cat;
use App\prod;

class catCon extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index','show']);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryies=cat::all();
        return view('Clothing-website.index')->with('cats',$categoryies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clothing.AddCat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category-name'=>'required|unique:cats,name|max:225',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',//2048=2M
            'category-id'=>'required|unique:cats,id'
        ]);
        
        //$request->file('img');
        
        $catImg=time() . '.' . $request->img->getClientOriginalExtension();
        $c2 = new cat();
        $c2->id =$request->input('category-id');
        $c2->name =$request->input('category-name');
        $c2->img =$catImg;
        $c2->save();
        $request->img->move(public_path('uplaod'),$catImg);
        //return $request->all();
        return redirect(route('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=1)
    {
        $products=prod::where('catId','=',$id)->get();
        
        $categoryies=cat::all();
        return view('Clothing-website.categories')->with(
            [
                'cats'=>$categoryies,
                'id'=>$id,
                'prods'=>$products
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=cat::find($id);
        //return $id;
        return view('Clothing-website.editcat')->with('cat',$cat);
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
            'category-name'=>'required|unique:cats,name|max:225',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',//2048=2M
            'category-id'=>'required'
        ]);
        
        //$request->file('img');
        
        $catImg=time() . '.' . $request->img->getClientOriginalExtension();
        $c2 = cat::find($id);
        $c2->id =$request->input('category-id');
        $c2->name =$request->input('category-name');
        $c2->img =$catImg;
        $c2->save();
        $request->img->move(public_path('uplaod'),$catImg);
        //return $request->all();
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
        $cat=cat::find($id);
        
        $cat->destroy($id);
        return redirect(route('cat.index'))->with('msg','OK deledet');
    }
}
