<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.categories-list', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
            ],
            [
                'name.required' => 'Loại tài khoản không được để trống',
                'name.max' => 'Loại tài khoản không được nhiều hơn :max kí tự',
                'name.regex' => 'Loại tài khoản không được chứa kí tự đặc biệt',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }

        $data = $request->all();
        unset($data['_token']);

        if ($files = $request->file('thumbnail')) {
            $destinationPath = 'images/categories/'; // upload path
            $time = time();
            $fileName = $time . "" . date('YmdHis') . "" . $files->hashName();
            $files->move($destinationPath, $fileName);
            $data['thumbnail'] = $fileName;
        } else {
            unset($data['thumbnail']);
        }

        $category = Category::create($data);

        if (isset($category)) {
            return response()->json(['is' => 'success', 'complete' => 'Danh mục được thêm thành công']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Danh mục chưa được thêm']);
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function edit(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255|regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ_(\s)_(\.)_(\,)_(\-)_(\_)]+$/',
                'description' => 'required|max:255',
                'price' => 'required|numeric|integer|min:0',
                'expiration_period' => 'required|numeric|integer|min:0',
            ],
            [
                'name.required' => 'Loại tài khoản không được để trống',
                'name.max' => 'Loại tài khoản không được nhiều hơn :max kí tự',
                'name.regex' => 'Loại tài khoản không được chứa kí tự đặc biệt',
                'description.required' => 'Mô tả về Loại tài khoản không được để trống',
                'max' => 'Mô tả về Loại tài khoản không được nhiều hơn :max kí tự',
                'price.numeric' => 'Giá tiền phải là số',
                'price.min' => 'Giá tiền phải là số lớn hơn hoặc bằng 0',
                'price.integer' => 'Giá tiền phải là số nguyên',
                'expiration_period.numeric' => 'Khoảng thời gian phải là số',
                'expiration_period.min' => 'Khoảng thời gian phải là số lớn hơn hoặc bằng 0',
                'expiration_period.integer' => 'Khoảng thời gian phải là số nguyên',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }
        $data = $request->all();
        $category = Category::find($data['id']);
        if ($files = $request->file('thumbnail')) {
            $destinationPath = 'images/categories/'; // upload path
            $time = time();
            $fileName = $time . "" . date('YmdHis') . "" . $files->hashName();
            $files->move($destinationPath, $fileName);
            $data['thumbnail'] = $fileName;
        } else {
            $data['thumbnail'] = $category->thumbnail;
        }
        unset($data['_token']);
        unset($data['id']);
        $flag = $category->update($data);
        if ($flag) {
            return response()->json(['is' => 'success', 'complete' => 'Loại tài khoản đã được cập nhật']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Loại tài khoản chưa được cập nhật']);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $category = Category::find($data['id']);
        unset($data['_token']);
        unset($data['id']);
        $flag = $category->update($data);
    }

    public function destroy($id)
    {
        return Category::findOrFail($id)->delete();
    }
}
