<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
	<title>@yield('title')</title>
    @section('style')
        <link href="/css/style.min.css" rel="stylesheet">
        @show
</head>
<body>
	@include('inc.header')

	@yield('content')

	@include('inc.footer')

	@include('inc.authentication')

    @section('script')
        @show
</body>
</html>
