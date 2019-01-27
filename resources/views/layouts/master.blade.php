<!DOCTYPE html>
<html lang="is">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Travelcard Iceland</title>
	<meta name="description" content="Great way to travel cheap and easy around Iceland.">
	<meta name="keywords" content="Travel,Cheap,Iceland,Camping,Cheap travel in iceland">
  	<meta name="author" content="Travelcard Iceland">

  	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133292402-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-133292402-1');
	</script>



	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-LRlmVvLKVApDVGuspQFnRQJjkv0P7/YFrw84YYQtmYG4nK8c+M+NlmYDCv0rKWpG" crossorigin="anonymous">
</head>
<body>
	@yield ('header')

	@yield ('floating-element')

	@yield ('section-1')

	@yield ('section-2')

	@include ('partials.footer')

	<script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/header.js" type="text/javascript"></script>
	<script src="/js/navbar.js" type="text/javascript"></script>
</body>
</html>