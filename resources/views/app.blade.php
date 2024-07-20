<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    @yield('style')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading" style="overflow-x: hidden;">

{{-- Div class warapper for the side_bar--}}
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        @include('includes.side_bar')
        {{-- Div id= content-wrapper and content for the Top Bar--}}
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
                @include('includes.nav_bar')
                @yield('content')
        </div>
    </div>
    {{---------------------------End Top Bar--------------------------}}
</div>
{{---------------------------End side bar--------------------------}}
@include('includes.footer')
@yield('script')
{{--Toaster--}}
<script>
    @if(Session::has('success'))
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    Toast.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{Session::get('success')}}',
        showConfirmButton: false,
        timer: 3000,
    });
    @endif
    @if(Session::has('error'))
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    Toast.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{Session::get('error')}}',
        showConfirmButton: false,
        timer: 3000,
    });
    @endif
</script>
</body>
</html>
