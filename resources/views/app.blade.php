   @include('backend.includes.header')
        <section class="content-header container">
            @include('backend.includes.nav')
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
