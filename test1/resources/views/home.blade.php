<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nhà Cà phê</title>
    <link rel="stylesheet" href="{{ asset('n6/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('n6/assets/css/gird.css') }}">
    <link rel="stylesheet" href="{{ asset('n6/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('n6/assets/css/reponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('n6/assets/font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    @yield('css')

</head>

<body>
    <div id="bg">
        <!--header-->
        @include('home.layout.header')

        <!--CONTAINER-->
        @yield('content')
        @include('home.layout.footer')

    </div>
</body>

</html>
@yield('js')
