<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.layouts.head')
</head>
<body>
    <div class="container-fuid">
        <header class="row" >
            @include('frontend.layouts.header')
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('frontend.layouts.footer')
        </footer>
     </div>
</body>
</html>
