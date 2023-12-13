<!DOCTYPE HTML>

<html>
	<head>
		<title>Moviefy - HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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
							<li><a id="user-list" href="{{ route('client.index') }}" style="text-decoration: none;">HOME &nbsp</a></li>
              <li><a id="film-list" href="{{ route('dashboard.index') }}" style="text-decoration: none;">DASHBOARD &nbsp</a></li>
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
        
<div class="container">   
    

        <div class="custom-search">
            <input class="form-control cutsom-input" type="text" id="Search" onkeyup="myFunction()" placeholder="Search" data-table="table1" value=''> 
        </div> 

 
    
<div class="box">
            
<div class="row gtr-10 gtr-uniform ">
@forelse ($genres as $genre)
    <div class="card">
        <div class="col-4">
            <a href="{{ route('reviews.show', $genre->id) }}">
                <div class="img1" ><span class="image fit"><img src="{{ asset('storage/images/'.$genre->img) }}" alt="{{ $genre->title }}" /></span></div>
                <div class="title">{{ $genre->title }}
                           <br> <p>{{ $genre->date }}</p>
                </div>
                <div class="text">{{ $genre->plot }}</div>
                <a href="genre.php"><div class="catagory">Movie<i class="fas fa-film"></i></div></a>
                <a href="#"><div class="views">{{ $genre->rating }}<i class="fas fa-star" style="color: #f5b50a;"></i> </div></a>
            </a>
        </div>
    </div>
@empty
<h1>No Movies Found🤔</h1>
@endforelse

  
</div>

    
</div>

    
</div>        
</body>

<script>
function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('card');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>

		<!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
            <script src="{{ asset('assets/js/search.js') }}"></script>
</html>