{{--	INITIAL DEMO HEAD
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Suzana Blog @yield('title')</title>

	
</head>
--}}

<head>
    <meta charset="UTF-8">
    <title>Suzana Zera @yield('title')</title>
    <meta name="viewport" content="width=device-width">

    

    @include('partials._styles')

	@yield('additional_stylesheets')
	
</head>