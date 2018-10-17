<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Selfy Pay - Касса нового поколения</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="HTML landing page for website apps">

		<!-- Favicon -->
		<link rel="icon" href="{{URL::asset('img/static/favicon.ico')}}">

		<!-- Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/static/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/static/revealator.css')}}">

		<!-- Template CSS -->

		<link rel="stylesheet" href="{{URL::asset('css/static/template.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/static/custom.css')}}">

	</head>

	<body>

		<!-- Loader -->
		<div class="loader">
			<div class="cp-spinner cp-skeleton"></div>
		</div>

			<!-- Навигация -->
			@include('layouts.navigation')

			<!-- Хидер -->
			@include('layouts.header')

		<!-- Main -->
		<div class="main">

			<!-- Как это работает -->
			@include('layouts.Advantages')

			<!-- Продукт -->
			@include('layouts.Plans')

			<!-- О компании -->
			@include('layouts.case')

			<!-- Команда -->
			@include('layouts.Team')

			<!-- Партнеры -->
			@include('layouts.Clients')

			<!-- Контакты -->
			@include('layouts.Contact')

			<!-- End of main -->
		</div>

		<!-- Подвал -->
		@include('layouts.Footer')

		<!-- Библиотеки -->
    @include('layouts.jQuery')
	</body>

</html>
