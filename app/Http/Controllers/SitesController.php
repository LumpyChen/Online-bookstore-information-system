<?php

namespace App\Http\Controllers;

use App\_order;
use App\_order_detail;
use App\_book;
use App\_repository;
use App\_repository_detail;
use App\_user;
use App\_keeper;
use App\_logistic;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	$order = _order::all();
	$order_detail = _order_detail::all();
	$book = _book::all();
	$repo = _repository::all();
	$repo_detail = _repository_detail::all();
	$user = _user::all();
	$keeper = _keeper::all();
	$logistic = _logistic::all();
	$book_store = array($order,$order_detail,$book,$repo,$repo_detail,$user,$keeper,$logistic);
	return view ('app')->with('bookstore',$book_store);
	
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
        //
    }
}
