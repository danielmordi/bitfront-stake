<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- C3 Chart css -->
    <link href="{{ asset('libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css">
    {{-- Select 2 --}}
    <link href="{{ asset('/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('css/app-dark.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Plugins css -->
    <link href="{{ asset('libs/bootstrap-editable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css">
    

    <style>
        .table-counter {
            counter-reset: rowNumber;
        }
    
        .table-counter td:first-child:before {
            counter-increment: rowNumber;
            content: counter(rowNumber);
            min-width: 1em;
            margin-right: 0.5em;
        }
    </style>

</head>

<body data-topbar="dark" data-layout="horizontal">
    {{-- <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div> --}}

    @yield('content')

</body>
</html>
