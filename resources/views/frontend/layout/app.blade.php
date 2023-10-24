<!DOCTYPE html>
<!-- Mushahedur Rahman Khan Software Developer -->
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title') | Clone Vista Print </title>

    <meta name="keywords" content="Vista Print">
    <meta name="description" content="Mushahedur Rahman Khan">
    <meta name="author" content="Mushahedur Rahman Khan">

    @include('frontend.layout.partials.style')
    
</head>

<body id="home">
    @include('frontend.layout.partials.header')
   

    @yield('content')
    

    @include('frontend.layout.partials.footer')


    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    @include('frontend.layout.partials.script')

</body>



</html>