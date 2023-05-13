<?php

namespace App\Http\Controllers\Customer;

use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        // if (!empty($category)) {
        //     return view('book_list', ['books' => []]);;
        // };

        $sortby = $request->sortby;
        $min_price = ((int) $request->min_price) / 1000;
        $max_price = ((int) $request->max_price) / 1000;
        if ($min_price && $max_price) {
            if ($sortby == 'price-desc')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')
                    ->where('category_id', $category->id)
                    ->where('status', 1)
                    ->where('price_sale', '>=', $min_price)
                    ->where('price_sale', '<=', $max_price)
                    ->orderBy('price_sale', 'desc');
            else if ($sortby == 'name')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')
                    ->where('category_id', $category->id)
                    ->where('status', 1)
                    ->where('price_sale', '>=', $min_price)
                    ->where('price_sale', '<=', $max_price)
                    ->orderBy('name');
            else if ($sortby == 'date')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')
                    ->where('category_id', $category->id)
                    ->where('status', 1)
                    ->where('price_sale', '>=', $min_price)
                    ->where('price_sale', '<=', $max_price)
                    ->orderBy('created_at', 'desc');
            else
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')
                    ->where('category_id', $category->id)
                    ->where('status', 1)
                    ->where('price_sale', '>=', $min_price)
                    ->where('price_sale', '<=', $max_price)
                    ->orderBy('price_sale', 'asc');
        } else {
            if ($sortby == 'price-desc')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')->where('status', 1)->orderBy('price_sale', 'desc');
            else if ($sortby == 'name')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')->where('status', 1)->orderBy('name');
            else if ($sortby == 'date')
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')->where('status', 1)->orderBy('created_at', 'desc');
            else
                $books = Book::select('id', 'name', 'slug', 'image', 'price_sale', 'price', 'quantity')->where('status', 1)->orderBy('price_sale', 'asc');
        }

        $books = Book::orderBy('price_sale')->paginate(20);
        return view('book_list', ['books' => $books, 'category' => $category]);
    }
}
