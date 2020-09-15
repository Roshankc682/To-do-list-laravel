<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class Books_controller extends Controller
{
    //
    function book_data()
    {
   		echo "hello";
   		return Book::all();
    }
}
