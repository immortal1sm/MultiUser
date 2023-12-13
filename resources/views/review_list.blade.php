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


<style>
    
    .container {
  display: flex;
  align-items: center;
  justify-content: center
}

img {
  max-width: 100%;
  max-height:100%;
}

.text {
  font-size: 20px;
  padding-left: 20px;
}  
    </style>   
    
	<body class="is-preload">


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="{{url('/client')}}" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
                        <li><a href="{{url('/client')}}">Home</a></li>
                        <li><a href="{{url('/client')}}">Dashboard</a></li>
						</ul>
						<ul class="actions stacked">
							
						</ul>
					</nav>
                </div>

				<!-- Main -->
<section id="one" class="spotlights">

    <div class="container">
                <div class="box">  
          
                <span class="image left"><img src="{{ asset('storage/images/' . $film->img) }}" style=" width: 1200px; height: 600px;">

                  <h3>Genre</h3> 
                    <hr>
                      @if($film->genre == 1)
                          <p>Action</p>
                      @elseif($film->genre == 2)
                          <p>Adventure</p>
                      @elseif($film->genre== 3)
                          <p>Comedy</p>
                      @elseif($film->genre == 4)
                          <p>Drama</p>
                      @elseif($film->genre == 5)
                          <p>Fantasy</p>
                      @elseif($film->genre== 6)
                          <p>Horror</p>
                      @elseif($film->genre == 7)
                          <p>Romance</p>
                      @elseif($film->genre == 8)
                          <p>Sci-Fi</p>
                      @endif
                    <hr>
                </span> 
                    
                    
<div class="inner">
                <h3>{{ $film->title }}</h3>
                <hr>
              <p>{{ $film->date }}</p>
              <h5 >Director</h5>
              <p >{{ $film->director }}</p>
                <hr>
              <h5 >Top Casts</h5>
              <p >{{ $film->cast }}</p>
                <hr>
              <h5 >Plot Description</h5>
              <p >{{ $film->plot }}</p>
              <h5 >Average Rating:</h5>
              <p class=>
   {!! str_repeat('<i class="fas fa-star"></i>', floor($averageRating)) !!}
   {!! str_repeat('<i class="far fa-star"></i>', 5 - floor($averageRating)) !!}{{ $averageRating }}
              </p>   
            </div>
                 
              <?php
              /*
            }else{
            echo "no data";
          }
             // session
            $title=$row['title'];  
               
            $insert = $model->rev_insert($userid,$id,$uname,$title,$d); 
                    
            */
          ?>
<form action="" method="post">        
<div class="col-12">
    <h3>Rating</h3>
<?php 
/*
    $row1 = $model->fetch_ave($id);
      if(!empty($row1)){
      $rate=$row1['avg(rating)'];
      }
    */
    ?>    
    <p><?php //echo round($rate, 1);?></p>
    <div class="col-4 col-12-xsmall">
    <input type="text" name="rate" id="rate" value="" placeholder="Rating">
    </div>
<textarea name="review" id="review" placeholder="Leave a review..." rows="6"></textarea>
            
            <div class="col-12">
              
<ul class="actions">

    <?php
 /*
    if($userid!=''){
                $rev=$row['filmID'];
                $rows = $model->fetch_rev($rev);
        

                if(!empty($rows)){
                  foreach($rows as $row){ 

             $u=$row['userid'];
      
       
            }
          }
    

     if($u==$userid){
         echo '<li><span class="button primary disabled">Submit</span></li>';
     }else{ echo '<li><button type="submit" name="submitrev" class="primary">Submit</button></li>'; 
    }
    }
    */
?>
  
    
</ul>
            </div>
        </div>
</form>                  
                    
    </div>
</div>

</section>
       
<div class="box">  
  <section >
      <h2>User Reviews</h2>  
      
<?php
 /*
                
                $rows = $model->fetch_rev($id);
                $i = 1;
      
                if(!empty($rows)){
                  foreach($rows as $row){ 
*/
?>
      <div class="box"> 
        <h5 ><?php //echo $row['rating']; ?>/5</h5>
<blockquote><?php //echo $row['review']; ?></blockquote>
<span><h5 >Reviewed by:</h5>
<h6 ><?php //echo $row['username']; ?></h6></span>
                
       </div>
      
        <?php
        /*
            }
          }else{
            echo "no data";
        }
        */
        ?>
      

    
      

    </section>              
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