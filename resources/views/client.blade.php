<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<style>
   /*Slide*/
.slider{
  position: absolute;
  height: 780px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 300%;
  height: 800px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 10%;
  transition: 2s;
}

.slide img{
  width: 100%;
  height: 100%;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}



/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

/*End of Slide*/ 
    
    </style>
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
					<a   href="#" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
					</a>
						<ul class="links">
							<li><a id="user-list" href="{{ route('client.index') }}" style="text-decoration: none;">HOME &nbsp</a></li>
							  <li><a id="film-list" href="{{ route('dashboard.index') }}" style="text-decoration: none;">DASHBOARD &nbsp</a></li>
							  <li >
                                

                                <div  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
							  
						</ul>
						
						<ul class="actions stacked">
                            <?php 
                           /* if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }*/
                            ?>
							
						</ul>
					</nav>
					
					

				<!-- Banner -->
                <section id="banner" class="major">
                        
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="./images/genre/action/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/adventure/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/comedy/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/horror/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/romance/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/fantacy/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/scifi/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="./images/genre/drama/2.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>

        </div>
        <!--automatic navigation end-->
      </div>

    </div>
    <!--image slider end-->
                        
						<div class="inner">
                            
							<header class="major">
								<h1> Welcome to Moviefy! </h1>
							</header>
							<div class="content">
								<span></span><p>Dive into the world of cinema with Moviefy, your go-to destination for the latest movie critiques, insightful analyses, and a cinematic journey like no other. Whether you're a seasoned cinephile or just looking for a great film to unwind with, you're in the right place!
                                </p>
                                <p>
                                    Get ready to embark on a cinematic journey like never before. Lights, camera, action – let the reviews roll at Moviefy! 🌟🎥
                                </p>

								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
                         
						</div> 
					</section>

				<!-- Main -->
					<div id="main">


						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="./images/genre/action/1.jpg" alt="Action" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 1]) }}" class="link">Action</a> <!-- 1 -->
                                        </h3>
                                        
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/comedy/1.jpg" alt="Comedy" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 3]) }}" class="link">Comedy</a> <!-- 3 -->
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/adventure/2.jpg" alt="Adventure" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 2]) }}" class="link">Adventure</a>
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/horror/2.jpg" alt="Horror" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 6]) }}" class="link">Horror</a>
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/drama/2.jpg" alt="Drama" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 4]) }}" class="link">Drama</a>
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/romance/2.jpg" alt="Romance" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 7]) }}" class="link">Romance</a>
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/scifi/1.jpg" alt="Scifi" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 8]) }}" class="link">Sci-Fi</a>
                                        </h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="./images/genre/fantacy/2.jpg" alt="Fantacy" />
									</span>
									<header class="major">
										<h3><a href="{{ route('genre_show', ['id' => 5]) }}" class="link">Fantacy</a>
                                        </h3>

									</header>
								</article>
							</section>

					</div>

			</div>

		<!-- Scripts -->
    <script type="text/javascript">
//slide
      var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 3000);
    </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

