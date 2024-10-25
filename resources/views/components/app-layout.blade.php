<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tamplate/css/style.css') }}">


    <title>{{ $title . ' - PT. KRTG INDONESIA' }}</title>
</head>

<body class="bg-gray-100">


    <!-- start navbar -->
    <x-navbar></x-navbar>
    <!-- end navbar -->


    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        <x-sidebar></x-sidebar>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">







            <!-- Sales Overview -->
            <div class="card">

                <!-- header -->
                <div class="card-header flex flex-row justify-between">
                    <h1 class="h6">{{ $title }}</h1>

                    <div class="flex flex-row justify-center items-center">

                        <a href="">
                            <i class="fad fa-chevron-double-down mr-6"></i>
                        </a>

                        <a href="">
                            <i class="fad fa-ellipsis-v"></i>
                        </a>

                    </div>

                </div>
                <!-- end header -->

                <!-- body -->
                <div class="card-body">


                    {{ $slot }}


                </div>
                <!-- end body -->

            </div>
            <!-- end Sales Overview -->




        </div>
        <!-- end content -->

    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('tamplate/js/scripts.js') }}"></script>
    <!-- end script -->

</body>

</html>
