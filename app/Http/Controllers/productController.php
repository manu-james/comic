<?php

namespace App\Http\Controllers;
use App\Models\ordermodel;
use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\Admin;
use App\Models\productmodel;
use App\Models\cartmodel;

use DB;
//use Validator;


class productController extends Controller
{
    public function blank()
    {
        return view('blank');
    }
    public function customerdelete($id)
    {
       
            $delete2=DB::table('ordermodels')->where('email',$id)->delete();
            return redirect('/customeradmin');
       
        

    }
    public function customers()
    {
        $customers=Admin::all();
        return view('customers',compact('customers'));
    }
    public function customeradmin()
    {
        $customeradmin=Admin::all();
        return view('customeradmin',compact('customeradmin'));
    }
    public function addtoorder(Request $request)
    {

       
        $ordermodels=new ordermodel();
       
       
       // $totalbooks= DB::table('cartmodels')->where('cartmodels.email', $email)->select(CONCAT('cartmodels.email'))->get();
            $ordermodels->email=session('LoggedUser');//$request->session()->get('newmodel')['id'];
            $ordermodels->ComicbookId=$request->ComicbookId;
            $ordermodels->ComicbookName=$request->ComicbookName;
            $ordermodels->ComicbookPrice=$request->ComicbookPrice;
            $ordermodels->save();
           

            if($ordermodels)
            {
                //return redirect('product');
               
                return back()->with('success','order Successfuly');
            }
        else
        {
           
            return back()->with('fail','Something wrong,try again later');
        }
    }
    public function orderview()
    {
        $order=ordermodel::all();
        $products=productmodel::all();
        $email=session('LoggedUser');//$request->session()->get('newmodel')['id'];
        $carts=cartmodel::all();
       
         return view('buy',compact('order'));
       
    }
    public function orderviewadmin()
    {
        $order=ordermodel::all();
      return view('adminorder',compact('order'));

    }
    
    public function orderdelete($id)
    {
        $delete=DB::table('ordermodels')->where('id',$id)->delete();

        return redirect('/adminorder');

    }
    public function orderdelete1($id)
    {
        $delete=DB::table('ordermodels')->where('id',$id)->delete();

        return redirect('/buy');

    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewsearch()
    {
        $allcat=productmodel::all();
        return view('viewsearch',compact('allcat'));
    }
    public function index()
    {
        return view('addcategory');
    }
    public function search(Request $request)
    {
        $getcname=request('sname');
        $allcat =productmodel::query()
        ->where('ComicbookName','LIKE',"%{$getcname}%")->get();
        return view('viewsearch',compact('allcat'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    

    public function cartdelete($id)
    {
        $delete=DB::table('cartmodels')->where('id',$id)->delete();

        return redirect('/cartview');

    }
    public function addtocart(Request $request)
    {
           
         $cartmodels=new cartmodel();
            $cartmodels->email=session('LoggedUser');//$request->session()->get('newmodel')['id'];
            $cartmodels->ComicbookId=$request->ComicbookId;
            $cartmodels->ComicbookName=$request->ComicbookName;
            $cartmodels->ComicbookPrice=$request->ComicbookPrice;
            $cartmodels->save();

            if($cartmodels)
            {
                //return redirect('product');
                
                return back()->with('success','Successfuly added to cart');
            }
        else
        {
           
            return back()->with('fail','Something wrong,try again later');
        }
    }

    public function cartview()
    {
        $cats=cartmodel::all();
      return view('cartview',compact('cats'));

    }
    public function create()
    { 
        $cat=categorymodel::all();
        return view('addproduct',compact('cat'));
        
        
    }
    
    public function prodview()
    { 
        $prod=productmodel::all();
        return view('productview',compact('prod'));
        
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
            'CategoryId' => 'unique:App\Models\categorymodel,CategoryId',
            'CategoryName' => 'unique:App\Models\categorymodel,CategoryName',
        ]); 

        $getcid=request('CategoryId');
        $getcname=request('CategoryName');

        $cat=new categorymodel();
        $cat->CategoryId = $getcid;
        $cat->CategoryName=$getcname;

        $cat->save();

        if($cat)
        {
            return back()->with('success','New Category has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    public function productview(Request $request)
    {
       /* $this->validate($request,[
            'CategoryId' => 'unique:App\Models\categorymodel,CategoryId',
            'CategoryName' => 'unique:App\Models\categorymodel,CategoryName',
        ]); */

        $getComicbookCategory=request('ComicbookCategory');
        $getComicbookId=request('ComicbookId');
        $getComicbookName=request('ComicbookName');
        $getComicbookPrice=request('ComicbookPrice');
        $getComicbookDescription=request('ComicbookDescription');
        
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        $prod=new productmodel();
        $prod->ComicbookCategory = $getComicbookCategory;
        $prod->ComicbookId=$getComicbookId;
        $prod->ComicbookName=$getComicbookName;
        $prod->ComicbookPrice=$getComicbookPrice;
        $prod->ComicbookDescription=$getComicbookDescription;
        $prod->pimage=$name;

        $prod->save();

        if($prod)
        {
            return back()->with('success','New Comicbook has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    
    public function catview()
    {
        $cat=categorymodel::all();
        return view('addcategory',compact('cat'));
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
        $row=DB::table('productmodels')->where('id',$id)->first();
        $prod=['info'=>$row];
        return view('editview',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'ComicbookCategory'=>'required',
            'ComicbookId'=>'required',
            'ComicbookName'=>'required',
            'ComicbookPrice'=>'required',
            'ComicbookDescription'=>'required'
            
        ]);

        $updating=DB::table('productmodels')->where('id',$request->input('id'))->update([
            'ComicbookCategory'=>$request->input('ComicbookCategory'),
            'ComicbookId'=>$request->input('ComicbookId'),
            'ComicbookName'=>$request->input('ComicbookName'),
            'ComicbookPrice'=>$request->input('ComicbookPrice'),
            
            'ComicbookDescription'=>$request->input('ComicbookDescription')
        ]);

       
            return redirect('/productview');
      


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=DB::table('productmodels')->where('id',$id)->delete();

        return redirect('/productview');

    }
    public function destroy($id)
    {
        $prod=productmodel::find($id);

        $prod->delete();

        return redirect('/productview');
    }

}
