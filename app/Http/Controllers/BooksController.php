<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;

class BooksController extends Controller
{
    //
    public function index()
    {
        return 'Hey';
    }

    public function show($slug)
    { 
        $post = Book::where('slug', $slug)->first();

        return $post['body'];
    }
}
