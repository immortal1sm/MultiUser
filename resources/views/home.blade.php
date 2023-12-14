<!DOCTYPE HTML>

<html>
	<head>
		<title>Moviefy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
	</head>	

	<body class="is-preload">
		@extends('layouts.app')
		@section('content') 

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Note: The "styleN" class below should match that of the banner element. -->
				<!-- Header -->
                <header id="header" class="alt">
						<a href="{{ route('client.index') }}" class="logo"><strong>Moviefy</strong> <span>by Laravel</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
				</header>

                    <!-- Menu -->
                    <nav id="menu">
                        <ul class="links">
							<li><a id="user-list" href="{{ route('client.index') }}" style="text-decoration: none;">HOME &nbsp</a></li>
                            <li><a id="film-list" href="{{ route('dashboard.index') }}" style="text-decoration: none;">DASHBOARD &nbsp</a></li>
							
						</ul>	
						<ul class="actions stacked">
                            <?php 
                           /*
						   if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }
							*/
                            ?>
							
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>{{ __('Dashboard') }}</h1>
							</header>
							<div class="content">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('You are logged in!') }}
                           
                            <ul class="actions">
                            <li><a href="/admin" class="button next scrolly">Go to Dashboard</a></li>
                            </ul>

						</div>
					</section>

			</div>

 
</section>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>

</body>
</html>