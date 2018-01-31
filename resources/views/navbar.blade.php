<div class="navbar navbar-inverse navbar-fixed-top bg-danger-600">
    <div class="navbar-header">
        <a href="/" class="navbar-brand"><img src="/assets/images/rappi_logo.png"></a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>
    <div class="navbar-collapse collapse" id="navbar-mobile">
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                @if (!isset($hideCart) || $hideCart == false)
                    <li>
                        <a class="dropdown-toggle" data-toggle="modal" data-target="#modal_cart">
                            <i class="icon-basket"></i>
                        </a>
                    </li>
                @endif
                @if (!isset($hideAccount) || $hideAccount == false)
                    @guest
                        <li>
                            <a href="/login" class="btn border-white text-white-800 btn-flat" style="font-size: 12px">Login</a>
                        </li>
                    @else
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/assets/images/user.png" alt="">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="icon-switch2"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</div>