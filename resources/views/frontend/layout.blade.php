<!DOCTYPE html>
<html lang="en">
    <head>
        @include('shared.meta-tags')

        @yield('title')

        <meta name="description" content="{{ $meta_description }}">

        @include('frontend.partials.css')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63781170-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());
          gtag('config', 'UA-63781170-2');
        </script>
    </head>
    <body>
        @include('frontend.blog.partials.header')

        @yield('content')

        @yield('unique-js')

        @include('frontend.blog.partials.footer')
    </body>
</html>
