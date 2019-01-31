<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Travelcard Iceland</title>

	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@yield ('main')
</body>
</html>