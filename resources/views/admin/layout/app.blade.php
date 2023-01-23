<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="apple-touch-icon" href="{{ asset('/admin/assets/apple-touch-icon.html') }}"> --}}
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}">
        <!-- Theme initialization -->

    </head>
    <body>

    @php
        $categories = \App\Models\Category::first();
        $Products = \App\Models\Product::first();
    @endphp
        @include('admin.layout.includes.components.head')
        @include('admin.layout.includes.components.aside')
        @yield('content')
        @include('admin.layout.includes.components.footer')

        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="{{ asset('/admin/js/vendor.js') }}"></script>
        <script src="{{ asset('/admin/js/app.js') }}"></script>
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js') }}"></script>
        <script>
            $('.dropify').dropify();
        </script>
    </body>

</html>
