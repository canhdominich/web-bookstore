<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        if ($user_id) {
            $wishlists = DB::table('wishlists')
                ->select(
                    'wishlists.id',
                    'books.id as book_id',
                    'books.image',
                    'books.name',
                    'books.slug',
                    'books.code',
                    'books.price',
                    'books.price_sale',
                    'books.quantity'
                )
                ->join('books', 'wishlists.book_id', '=', 'books.id')
                ->where('wishlists.user_id', '=', $user_id)
                ->where('books.status', '=', 1)
                ->orderBy('wishlists.created_at', 'desc')
                ->paginate(5);
            return view('wishlist', ['wishlists' => $wishlists]);
        }
    }

    public function addWishlist(Request $request)
    {
        if (Auth::check()) {
            $data['user_id'] = Auth::user()->id;
            $data['book_id'] = $request->id;
            $check = Wishlist::where('user_id', $data['user_id'])->where('book_id', $data['book_id'])->get()->first();
            if ($check) {
                return response()->json(['is' => 'exist']);
            }
            $product = Book::find($data['book_id']);
            if ($product) {
                $wishlist = Wishlist::create($data);
                if ($wishlist) {
                    return response()->json(['is' => 'success']);
                }
            }
            return response()->json(['is' => 'unsuccess']);
        }
        return response()->json(['is' => 'notlogged']);
    }

    public function delete($id)
    {
        $user_id = Auth::user()->id;
        if ($user_id && $id) {
            Wishlist::where('id', $id)->where('user_id', $user_id)->delete();
        }
    }
}
