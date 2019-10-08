<!doctype html>
<html data-server="{!! env('SITE_SERVER') !!}" data-version="1.2.0" style="height: 101%;" @php(language_attributes())>
    @include('partials.sitewide.html-head')
    <body style="height: 101%" @php(body_class())>

        <header>
            @include('partials.sitewide.jump-to-content')
            @include('partials.messages.cookie-notice')
            @include('partials.header')
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer>
            @include('partials.sitewide.footer')
        </footer>

    </body>
</html>