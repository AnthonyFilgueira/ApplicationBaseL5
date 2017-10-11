<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Innodite</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">{{ trans('validation.template.home')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('lang', ['en']) }}">{{ trans('application.en')}}</a></li>
                <li><a href="{{ url('lang', ['es']) }}">{{ trans('application.es')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">{{ trans('validation.template.login')}}</a></li>
                    <li><a href="{{ url('/auth/register') }}">{{ trans('validation.template.register')}}</a></li>
                @else
                    @if  (Auth::user()->type == "admin")
                        @include('partials.menu.admin')
                    @elseif(Auth::user()->type == "user")
                        @include('partials.menu.user')
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->full_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/auth/logout') }}">{{ trans('validation.template.logout')}}</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
