<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the book service
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
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
