 <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('layouts.includes.head')
</head>

<body>

<div id="preloader">
    <div class="loader"></div>
</div>

<div class="page-container">

    {{--start sidebar--}}
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="dashboard.php"><img src="../assets/images/icon/logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                @include('layouts.includes.sidebar')
            </div>
        </div>
    </div>
    {{--end sidebar--}}

    <div class="main-content">

        {{-- start header --}}
       @include('layouts.includes.header')
        {{-- end header --}}

        {{-- start Content --}}
        <div class="main-content-inner">
            @yield('content')
        </div>
        {{-- end Content --}}

    </div>

    {{--start footer--}}
    @include('layouts.includes.footer')
    {{--end footer--}}
</div>
<!-- main content area end -->



</div>
@include('layouts.includes.script')
@yield('scripts')
</body>

</html>
