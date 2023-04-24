<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('admin.book.books-list', ['books' => $books, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'code' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'author' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'description' => 'required',
                'category_id' => 'required',
                'quantity' => 'required|min:1',
                'price' => 'required',
                'price_sale' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'Tên sách không được để trống',
                'name.max' => 'Tên sách không được nhiều hơn :max kí tự',
                'name.regex' => 'Tên sách không được chứa kí tự đặc biệt',
                'code.required' => 'Mã sách không được để trống',
                'code.max' => 'Mã sách không được nhiều hơn :max kí tự',
                'code.regex' => 'Mã sách không được chứa kí tự đặc biệt',
                'author.required' => 'Tác giả của sách không được để trống',
                'author.max' => 'Tác giả của sách không được nhiều hơn :max kí tự',
                'author.regex' => 'Tác giả của sách không được chứa kí tự đặc biệt',
                'description.required' => 'Mô tả sách không được để trống',
                'category_id.required' => 'Danh mục sách không được để trống',
                'quantity.required' => 'Số lượng sách không được để trống',
                'quantity.min' => 'Số lượng sách ít nhất là 1',
                'price.required' => 'Giá sách không được để trống',
                'price_sale.required' => 'Giá bán không được để trống',
                'status.required' => 'Trạng thái không được để trống',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }
        $data = $request->all();
        unset($data['_token']);

        if ($files = $request->file('image')) {
            $destinationPath = 'images/books/'; // upload path
            $time = time();
            $fileName = $time . "" . date('YmdHis') . "" . $files->hashName();
            $files->move($destinationPath, $fileName);
            $data['image'] = $fileName;
        } else {
            unset($data['image']);
        }
        $data['slug'] = Str::slug($data['name']);
        $book = Book::create($data);

        if (isset($book)) {
            return response()->json(['is' => 'success', 'complete' => 'Sách được thêm thành công']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Sách chưa được thêm']);
    }

    public function show($id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        return view('admin.book.edit-book', ['book' => $book, 'categories' => $categories]);
    }

    public function edit(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'code' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'author' => 'required|max:512|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'description' => 'required',
                'category_id' => 'required',
                'quantity' => 'required|min:1',
                'price' => 'required',
                'price_sale' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'Tên sách không được để trống',
                'name.max' => 'Tên sách không được nhiều hơn :max kí tự',
                'name.regex' => 'Tên sách không được chứa kí tự đặc biệt',
                'code.required' => 'Mã sách không được để trống',
                'code.max' => 'Mã sách không được nhiều hơn :max kí tự',
                'code.regex' => 'Mã sách không được chứa kí tự đặc biệt',
                'author.required' => 'Tác giả của sách không được để trống',
                'author.max' => 'Tác giả của sách không được nhiều hơn :max kí tự',
                'author.regex' => 'Tác giả của sách không được chứa kí tự đặc biệt',
                'description.required' => 'Mô tả sách không được để trống',
                'category_id.required' => 'Danh mục sách không được để trống',
                'quantity.required' => 'Số lượng sách không được để trống',
                'quantity.min' => 'Số lượng sách ít nhất là 1',
                'price.required' => 'Giá sách không được để trống',
                'price_sale.required' => 'Giá bán không được để trống',
                'status.required' => 'Trạng thái không được để trống',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }

        $data = $request->all();
        $book = Book::find($data['id']);
        if ($files = $request->file('image')) {
            $destinationPath = 'images/books/'; // upload path
            $time = time();
            $fileName = $time . "" . date('YmdHis') . "" . $files->hashName();
            $files->move($destinationPath, $fileName);
            $data['image'] = $fileName;
        } else {
            $data['image'] = $book->image;
        }
        unset($data['_token']);
        unset($data['id']);
        $flag = $book->update($data);
        if ($flag) {
            return response()->json(['is' => 'success', 'complete' => 'Sách đã được cập nhật']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Sách chưa được cập nhật']);
    }

    public function update(Request $request)
    {
        
    }

    public function destroy($id)
    {
        return Book::findOrFail($id)->delete();
    }
}
