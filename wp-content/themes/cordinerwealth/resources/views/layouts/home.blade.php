<!doctype html>
<html @php language_attributes() @endphp>
    @include('partials.head')
    <body @php body_class() @endphp>

        @yield('content')

        @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    </body>
</html>
