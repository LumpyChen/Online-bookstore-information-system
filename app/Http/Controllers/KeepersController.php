<?php

namespace App\Http\Controllers;
use App\_keeper;
use Illuminate\Http\Request;
use Redirect, Input, Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KeepersController extends Controller
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
        $_keeper = new _keeper;
        $_keeper->keeper_username = Input::get('keeper_username');
        $_keeper->keeper_password = Input::get('keeper_password');
        $_keeper->keeper_permisson = Input::get('keeper_permission');

        if ($_keeper->save()) {
            return Redirect::to('keepers');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败!');
        }
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
        $keeper = _keeper::find($id);
        $keeper->delete();
        return Redirect::to('/');
        //
    }
}
