<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Status;
use Illuminate\Http\Request;

class ShopContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $shop;
    public function __construct(Shop $shop)
    {
        $this->shop =$shop;
    }
    public function index()
    {
        $shops =Shop::all();
        return view('shop.list',compact('shops'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status= Status::all();
        return view('shop.create',compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->phone=$request->input('phone');
        $shop->email=$request->input('email');
        $shop->address=$request->input('address');
        $shop->manager=$request->input('manager');
        $shop->status_id=$request->input('status');
        $shop->save();

        return  redirect()->route('list');
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
        $shop = Shop::find($id);
        return view('shop.update',compact('shop'));

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
        $shop = Shop::find($id);
        $shop->name = $request->input('name');
        $shop->phone=$request->input('phone');
        $shop->email=$request->input('email');
        $shop->address=$request->input('address');
        $shop->manager=$request->input('manager');
        $shop->status_id=$request->input('status');
        $shop->save();

        return  redirect()->route('list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect()->route('list');
    }
    public function search(Request $request)
    {
        $text = $request->name;
        $shops = Shop::where('name', 'LIKE', '%'.$text.'%')->get();
        return view('shop.list', compact('shops'));

    }
}
