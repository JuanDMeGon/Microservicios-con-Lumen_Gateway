<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the author service
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Retrieve and show all the authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Creates an instance of author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Obtain and show an instance of author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
    }

    /**
     * Updated an instance of author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
    }

    /**
     * Removes an instance of author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
    }

}
