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
	        <a class="navbar-brand" href="{{ route('home') }}">Abra 的罐头盒</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        	<ul class="nav navbar-nav">
            	<li class="active"><a href="/">首页</a></li>
            	<li><a href="{{ route('articles.index') }}">文章列表</a></li>
        	</ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
              @if (Auth::user()->is_admin)
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  后台管理 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('write') }}">写文章</a></li>
                  <li><a href="{{ route('users.index') }}">用户列表</a></li>
                  <li><a href="#">评论列表</a></li>
                </ul>
              </li>
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
