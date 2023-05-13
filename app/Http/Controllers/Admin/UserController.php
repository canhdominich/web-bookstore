<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.users-list', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email',
                'address' => 'required',
                'password' => 'required|min:8|max:32',
            ],
            [
                'name.required' => 'Tên nhân viên không được để trống',
                'avatar.required' => 'Ảnh nhân viên không được để trống',
                'email.required' => 'Email nhân viên không được để trống',
                'email.email' => 'Email chưa đúng định dạng',
                'address.required' => 'Địa chỉ nhân viên không được để trống',
                'password.required' => 'Yêu cầu nhập mật khẩu',
                'password.min' => 'Mật khẩu tối thiểu 8 kí tự',
                'password.max' => 'Mật khẩu tối đa 32 kí tự',
                'avatar.image' => 'Yêu cầu phải là ảnh có đuôi jpeg,png,jpg,gif',
                'avatar.mimes' => 'Yêu cầu phải là ảnh có đuôi jpeg,png,jpg,gif',
                'avatar.max' => 'Ảnh không vượt quá 2MB',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }
        $data = $request->all();
        unset($data['_token']);
        $time = time();
        if ($files = $request->file('avatar')) {
            $destinationPath = 'images/accounts/'; // upload path
            $time = time();
            $fileName = $time . "" . date('YmdHis') . "" . $files->hashName();
            $files->move($destinationPath, $fileName);
            $data['avatar'] = $fileName;
        }
        $data['password'] = bcrypt($data['password']);
        $data['created_at'] = date('Y-m-d H:i:s');;
        $admin = User::create($data);
        if (isset($admin)) {
            return response()->json(['is' => 'success', 'complete' => 'Một nhân viên mới đã được thêm thành công']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Một nhân viên mới chưa được thêm thành công']);
    }


    public function show($id)
    {
        return User::find($id);
    }

    public function edit(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email',
                'address' => 'required',
                'password' => 'required|min:8|max:32',
            ],
            [
                'name.required' => 'Tên nhân viên không được để trống',
                'avatar.required' => 'Ảnh nhân viên không được để trống',
                'email.required' => 'Email nhân viên không được để trống',
                'email.email' => 'Email chưa đúng định dạng',
                'address.required' => 'Địa chỉ nhân viên không được để trống',
                'password.required' => 'Yêu cầu nhập mật khẩu',
                'password.min' => 'Mật khẩu tối thiểu 8 kí tự',
                'password.max' => 'Mật khẩu tối đa 32 kí tự',
                'avatar.image' => 'Yêu cầu phải là ảnh có đuôi jpeg,png,jpg,gif',
                'avatar.mimes' => 'Yêu cầu phải là ảnh có đuôi jpeg,png,jpg,gif',
                'avatar.max' => 'Ảnh không vượt quá 2MB',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['is' => 'failed', 'error' => $validator->errors()->all()]);
        }
        $data = $request->all();
        $user = User::find($data['id']);
        unset($data['_token']);
        unset($data['id']);
        $flag = $user->update($data);
        if ($flag) {
            return response()->json(['is' => 'success', 'complete' => 'Người dùng đã được cập nhật']);
        }
        return response()->json(['is' => 'unsuccess', 'uncomplete' => 'Người dùng chưa được cập nhật']);
    }

    public function destroy($id)
    {
        return User::findOrFail($id)->delete();
    }
}
