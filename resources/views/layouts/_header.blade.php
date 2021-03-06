<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
					<img src="/uploads/images/nr.png" class="img-responsive img-circle" width="30px" height="30px">
				</span>
				niuran
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              <li class="{{ active_class(if_route('root')) }}"><a href="{{ route('root')}}">首页</a></li>
        @auth
              <li class="{{ active_class(if_route('articles.index')) }}"><a href="{{ route('articles.index')}}">全部文章</a></li>
        @endauth
              <li class="{{ active_class(if_route('diary')) }}"><a href="{{ route('diary')}}">myDiary</a></li>
              <li class="{{ active_class(if_route('info')) }}"><a href="{{ route('info')}}">关于我</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
		@guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
		@else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('users.show', Auth::id()) }}">个人中心</a></li>
			                <li><a href="{{ route('users.edit', Auth::id()) }}">编辑资料</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    退出登录
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
		@endguest
            </ul>
        </div>
    </div>
</nav>
