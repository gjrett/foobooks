<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BookController extends Controller
{
    /**
     * GET /books/{title}
     */
    public function show($title)
    {
        return view('books.show')->with(['title' => $title]);
    }
    /**
     * GET /books
     */
    public function index()
    {
        return 'Here are all the books...';
    }

}