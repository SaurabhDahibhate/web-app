<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | AG Corporation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/fav.png') }}">
    @include('layouts.head-css')

    @livewireStyles
</head>

{{-- @section('body') --}}

<body class="pace-done">
{{-- @show --}}
<div id="layout-wrapper">
@include('layouts.topbar')
@include('layouts.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@include('layouts.right-sidebar')
@include('layouts.vendor-scripts')

@livewireScripts
</body>

</html>
