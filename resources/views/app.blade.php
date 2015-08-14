   @include('includes.header')
        <section class="content-header container">
            @include('includes.nav')
            @yield('page-header')
        </section>
   <section class="container">
       @include('includes.partials.messages')
            @yield('content')

        </section>
        @include('includes.footer')
    </body>
</html>
