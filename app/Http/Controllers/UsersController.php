<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);

        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

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
        $this->authorize('update', $user);
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
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    /*
        更新用户资料
    */
    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'password' => 'nullable|confirmed|min:6|max:20'
        ]);

        $this->authorize('update', $user);

        $data = [];
        $data['name'] = $request->name;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        session()->flash('success', '个人资料更新成功！');

        return redirect()->route('users.show', $user->id);
    }

    /*
        后台管理入口
    */
    public function admin()
    {
        $this->authorize('isAdmin', Auth::user());
        return view('admin.index');
    }

    /*
        用户管理入口
    */
    public function admin_users()
    {
        $this->authorize('isAdmin', Auth::user());
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }

    /*
        文章管理入口
    */
    public function admin_articles()
    {
        $this->authorize('isAdmin', Auth::user());
        return view('admin.articles');
    }

    /*
        评论管理入口
    */
    public function admin_comment()
    {
        $this->authorize('isAdmin', Auth::user());
        return view('admin.comment');
    }

    /*
        删除用户
    */
    public function destroy(User $user)
    {
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', '成功删除用户！');
        return back();
    }
}
