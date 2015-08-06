<ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li>{!! link_to('auth/login', 'Login') !!}</li>
                <li>{!! link_to('auth/register', 'Register') !!}</li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hello, {{  ucfirst(Auth::user()->first_name) }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{!! link_to('users', 'Dashboard') !!}</li>
                        <li>{!! link_to('reports/create', 'Submit Report') !!}</li>
                        <li>{!! link_to('reports', 'Users Reports') !!}</li>
                        <li>{!! link_to('auth/logout', 'Logout') !!}</li>
                    </ul>
                </li>
                @endif
            </ul>