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

		<!-- Template CSS -->

		<link rel="stylesheet" href="{{URL::asset('css/static/template.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/static/custom.css')}}">

	</head>

	<body>

		<!-- Loader -->
		<div class="loader">
			<div class="cp-spinner cp-skeleton"></div>
		</div>

			<!-- Navigation -->
			@include('layouts.navigation')

			<!-- header -->
			@include('layouts.header')

		<!-- Main -->
		<div class="main">

			<!-- Advantages -->
			@include('layouts.Advantages')

			<!-- Case -->
			@include('layouts.case')

			<!-- Info -->
			@include('layouts.info')

			<!-- Clients -->
			@include('layouts.Clients')

			<!-- Plans -->
			@include('layouts.Plans')

			<!-- Team -->
			@include('layouts.Team')

			<!-- Newsletter -->
			@include('layouts.NewsLetter')

			<!-- FAQ -->
			@include('layouts.FAQ')

			<!-- Contact -->
			@include('layouts.Contact')

			<!-- End of main -->
		</div>

		<!-- Footer -->
		@include('layouts.Footer')

		<!-- jQuery -->
    @include('layouts.jQuery')
	</body>

</html>
