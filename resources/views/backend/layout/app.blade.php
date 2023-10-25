

<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Admin Dashboard</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Mushahedur" />

    @include('backend.layout.partials.style')

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    @include('backend.layout.partials.sidebar')
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    @include('backend.layout.partials.header')

    <!-- [ Header ] end -->


  

    <!-- [ Main Content ] start -->

    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            @yield('content')

            
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

     <!-- [ All Script  ]  -->
    @include('backend.layout.partials.script')


</body>

</html>
