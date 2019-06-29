<!DOCTYPE html>
<html lang="en">
@include('admin.Layout.header')
<body>
        <div class="dashboard-main-wrapper">
    @include('admin.Layout.navbar')
    @include('admin.Layout.sidebar') 
    <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                @yield('content')
                
                </div>
            </div>
            @include('admin.Layout.footer')
</body>
 
</html>