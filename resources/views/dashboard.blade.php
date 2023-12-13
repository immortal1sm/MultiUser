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

 
		<!-- Wrapper -->
			<div id="wrapper">

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
                        <ul class="links">
							<li><a id="user-list" href="{{ route('client.index') }}" style="text-decoration: none;">HOME &nbsp</a></li>
                            <li><a id="film-list" href="{{ route('dashboard.index') }}" style="text-decoration: none;">DASHBOARD &nbsp</a></li>
						</ul>	
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
								<h1><?php //echo $row['username']; ?></h1>
							</header>
							<div class="content">
                                <ul class="alt">
                                <h4>Email:</h4><li>{{ $user->email }}</li>
                                <h4>Birthday:</h4><li>{{ $user->dob }}</li>   
                                <h4>Gender:</h4><li>{{ $user->gender }}</li>
                                </ul>
							</div>
						</div>

					</section>

				<!-- Main -->
					<div id="main">
            


                <?php
                /*
				$model = new Model();
                $rows = $model->fetch_user_review($userid);

                if(!empty($rows)){
                  foreach($rows as $row){ 
					*/
              ?>

						<!-- Three -->
							<section id="three">
								<div class="inner">
									<header class="major">
										<h2><?php //echo $row['film_title']; ?></h2>
                                        <h5>Rating <?php //echo $row['rating']; ?>/5</h5>
									</header>
                                    <h5 class="right"><?php //echo $row['review_date']; ?></h5>
									<p><?php //echo $row['review']; ?></p>
									<ul class="actions">
										<li><a href="{{url('user/edit')}}<?php //echo $row['reviewid']; ?>" class="button next">Edit</a></li>
									</ul>
								</div>
							</section>
                            <?php 
                               /*
							 }
                              }else{
                                echo '<header class="major">
										<h2>No Reviews</h2>
									</header>';
                            }
							*/
                              ?>
					</div>




			</div>

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