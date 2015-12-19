<?php

namespace App\Http\Controllers;
use App\_book;
use Illuminate\Http\Request;
use Redirect, Input, Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
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
        $_book = new _book;
        $_book->book_class = Input::get('book_class');
        $_book->book_name = Input::get('book_name');
        $_book->book_price = Input::get('book_price');
        $_book->book_discount = Input::get('book_discount');
        $_book->book_author = Input::get('book_author');
        $_book->publisher_name = Input::get('publisher_name');
        $_book->publish_time = Input::get('publish_time');
        $_book->book_intro = Input::get('book_intro');

        if ($_book->save()) {
            return Redirect::to('books');
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
        $book = _book::find($id);
        $book->delete();
        return Redirect::to('/');
        //
    }
}
