@include('layouts.partials._header')
        <header>
            @yield('content')
        </header>
           
        <main>
            @yield('main')
        </main>

        <footer>
            @yield('content')
            @yield('scripts')
        </footer>
@include('layouts.partials._footer') 