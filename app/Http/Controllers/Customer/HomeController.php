<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // book detail
    public function bookDetail($slug)
    {
        $book_key = 'book' . $slug;
        $current_time = time();
        if (Session::has($book_key)) {
            if ($current_time - Session::get($book_key) > 1800) {
                Book::where('slug', $slug)->firstOrFail()->increment('view_count');
                Session::put(
                    [
                        $book_key => $current_time,
                    ]
                );
            }
        } else {
            Book::where('slug', $slug)->firstOrFail()->increment('view_count');
            Session::put(
                [
                    $book_key => $current_time,
                ]
            );
        }
        $book = Book::where('slug', $slug)->first();
        return view('book_detail', compact('book'));
    }

    public function search(Request $request){
        $parameter = trim($request->parameter);
        $products = Book::where('name', 'like', "%$parameter%")->where('status', 1)->where('quantity', '>', 0)->orderBy('name', 'asc')->paginate(15);
        return view('search', ['parameter' => $parameter, 'products' => $products]);
    }
}
