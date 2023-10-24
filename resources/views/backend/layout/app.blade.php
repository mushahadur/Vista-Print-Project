<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mushahedur">
    <title>@yield('title') | Admin Dashboard</title>
    
    @include('backend.layout.partials.style')

</head>

<body>
    <div class="wrapper">
        {{-- Sitebar section --}}
        @include('backend.layout.partials.sidebar')
       

        
        <div class="main">
            {{-- Header Section --}}
            @include('backend.layout.partials.header')
            
                @yield('content')

             @include('backend.layout.partials.footer')
            
        </div>
    </div>

    @include('backend.layout.partials.script')
 

</body>

</html>
