<!DOCTYPE html>
<html lang="en">
    @include('Layout.header')
<body>

    @include('Layout.navbar')
    <div class="Loader"></div>

<div class="wrapper">
    
@yield('content')

</div>

@include('Layout.footer')
</body>
</html>