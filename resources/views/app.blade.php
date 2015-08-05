<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="_token" content="{{ csrf_token() }}" />
        <title>Ueye Technologies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    </head>
    <body>
        <section class="content-header container">
           
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li>{!! link_to('auth/login', 'Login') !!}</li>
                <li>{!! link_to('auth/register', 'Register') !!}</li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hello, {{ Auth::user()->first_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{!! link_to('users', 'Dashboard') !!}</li>
                        <li>{!! link_to('reports/create', 'Submit Report') !!}</li>
                        <li>{!! link_to('reports', 'Users Reports') !!}</li>
                        <li>{!! link_to('auth/logout', 'Logout') !!}</li>
                    </ul>
                </li>
                @endif
            </ul>
            @yield('page-header')
        </section>

        <section class="container">
            @if(Session::has('flash_message'))
            <p class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}</p>
            @endif
            @yield('content')

        </section>
        @include('backend.includes.footer')
    </body>
</html>
