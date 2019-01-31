@include('layouts.partials.header') 
    <div id="app">
        @include('layouts.partials.nav')
        <main class="py-4">
            <div class="container"> 
                @yield('content')
            </div>
        </main>
    </div>
@include('layouts.partials.footer')    

