<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Tubes Pemweb - {{ $title ?? '' }}</title>
	<link href="{{ asset('assets') }}/css/main-styling.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/LogoItera.png" />
    <link href="{{ asset('assets') }}/css/{{ $title ?? '' }}.css" rel="stylesheet">
	@yield('css')
</head>

<body>
	@yield('content')
</body>
</html>