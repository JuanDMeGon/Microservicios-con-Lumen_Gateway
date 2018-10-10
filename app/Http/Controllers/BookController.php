<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retrieve and show all the books
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Creates an instance of book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Obtain and show an instance of book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
    }

    /**
     * Updated an instance of book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
    }

    /**
     * Removes an instance of book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
    }

}
