<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
	/*
		用户注册页面
	*/
    public function create()
    {
        return view('users.create');
    }

    /*
    	用户信息页面
    */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /*
    	处理用户注册表单请求
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('success', '鲜鱼罐头盒欢迎您的加入~');
        return redirect()->route('users.show', [$user]);
    }

    /*
        用户资料编辑
    */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
}
