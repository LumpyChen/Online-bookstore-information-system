<?php

namespace App\Http\Controllers;
use Redirect, Input, Auth;
use Illuminate\Http\Request;
use App\_user;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
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
        $_user = new _user;
        $_user->user_name = Input::get('user_name');
        $_user->password = Input::get('password');
        $_user->email = Input::get('email');
        $_user->user_phone = Input::get('user_phone');
        $_user->collected_id = Input::get('collected_id');
        $_user->user_address = Input::get('user_address');

        if ($_user->save()) {
            return Redirect::to('users');
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
        $user = _user::find($id);
        $user->delete();
        return Redirect::to('/');
        //
    }
}
