<header role="banner">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        	<span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="{{ route('admin_home') }}">鲜鱼罐头盒后台管理</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        	<ul class="nav navbar-nav">
            	<li class="active"><a href="{{ route('admin_home') }}">后台首页</a></li>
            	<li><a href="{{ route('admin_users') }}">用户管理</a></li>
            	<li><a href="{{ route('articles.index') }}">文章管理</a></li>
				<li><a href="{{ route('admin_comment') }}">评论管理</a></li>
        	</ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
              @if (Auth::user()->is_admin)
              <li><a href="{{ route('home') }}">返回首页</a></li>
              @endif
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ Auth::user()->name }} <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                <li><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
                <li class="divider"></li>
                <li>
                  <a id="logout" href="#">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                    </form>
                  </a>
                </li>
              </ul>
            </li>
          @else
            <li><a href="{{ route('login') }}">登录</a></li>
            <li><a href="{{ route('signup') }}">注册</a></li>
          @endif
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
