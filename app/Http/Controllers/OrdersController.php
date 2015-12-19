<?php

namespace App\Http\Controllers;
use Redirect, Input, Auth;
use Illuminate\Http\Request;
use App\_order;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_order = new _order;
        $_order->user_id = Input::get('user_id');
        $_order->logistics_id = Input::get('logistics_id');
        $_order->repository_id = Input::get('repository_id');
        $_order->payment_method = Input::get('payment_method');
        $_order->order_condition = Input::get('order_condition');

        if ($_order->save()) {
            return Redirect::to('orders');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败!');
        }
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = _order::find($id);
        $order->delete();
        return Redirect::to('/');
        //
        //
    }
}
