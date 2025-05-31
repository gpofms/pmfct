<head>
	<title>@if(!empty($pagetitle)) {{$pagetitle}} @endif</title>
	<meta charset="utf-8">
    <title>PRAKASJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom styles for this template -->


        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"  >

        <!-- Customized Bootstrap Stylesheet -->
        {{-- <link href="../css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <!-- Template Stylesheet -->
        {{-- <link href="../css/style.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


	@stack('custom-style')
</head>