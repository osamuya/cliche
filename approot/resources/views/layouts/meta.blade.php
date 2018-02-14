<!doctype html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ $parameter->app_name }}</title>
	<meta name="description" content="">
	<meta name="keywords" content="{{ env('APP_NAME') }}">
	<meta name="csrf-token" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ env('APP_URL') }}">
	<meta property="og:image" content="">
	<meta property="og:title" content="{{ $parameter->app_name }}">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href=""/>
	<!--Bootstrap-->
	<script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/superagent.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<!--css-->
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all">
	<!--js-->
	<script type="text/javascript" src="/assets/js/bundle.js"></script>
	<!--[if lt IE 10]>
	<script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="assets/js/respond.min.js"></script>
	<script type="text/javascript" src="assets/js/flexibility.js"></script>
	<![endif]-->
</head>