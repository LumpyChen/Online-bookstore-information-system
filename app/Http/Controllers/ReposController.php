<?php

namespace App\Http\Controllers;
use Redirect, Input, Auth;
use Illuminate\Http\Request;
use App\_repository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReposController extends Controller
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
        $_repository = new _repository;
        $_repository->repository_id = Input::get('keeper_id');
        $_repository->contact_link = Input::get('contact_link');
        $_repository->address = Input::get('address');

        if ($_repository->save()) {
            return Redirect::to('repositories');
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
        $repository = _repository::find($id);
        $repository->delete();
        return Redirect::to('/');
        //
    }
}
