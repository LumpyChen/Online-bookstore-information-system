<?php

namespace App\Http\Controllers;
use Redirect, Input, Auth;
use Illuminate\Http\Request;
use App\_logistc;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LogisticsController extends Controller
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
        $_logistic = new _logistic;
        $_logistic->logistics_name = Input::get('logistics_name');
        $_logistic->keeper_id = Input::get('keeper_id');
        $_logistic->logistics_phone_number = Input::get('logistics_phone_number');
        $_logistic->logistics_address = Input::get('logistics_address');
        $_logistic->logistic_author = Input::get('logistic_author');

        if ($_logistic->save()) {
            return Redirect::to('logistics');
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
        $logistic = _logistic::find($id);
        $logistic->delete();
        return Redirect::to('/');
        //
    }
}
