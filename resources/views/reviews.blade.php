<!-- Bootstrap CSS -->
<head>
   <!-- Other head elements -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery and Popper.js (optional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>

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
    
                
            <span class="image left"><img src="{{ asset('storage/images/' . $film->img) }}" style=" width: 300px; height: 250px;">
            <h1>234</h1>
              <h3>Genre</h3> 
                <hr>
                <p>

        <?php 

                    ?>

                </p>
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
             
<form action="" method="post">        
<div class="col-12">
<h3>Rating</h3>    

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






<form action="{{ route('add_review', $film->id) }}" method="POST" class="form-inline">
 @csrf
 <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
 <input type="hidden" name="filmid" value="{{ $film->id }}">
 <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Add this line -->
 <input type="hidden" name="film_title" value="{{ $film->title }}"> <!-- Add this line -->
 <div class="form-group">
  <label for="rating" class="mr-2">Rating:</label>
  <input type="number" id="rating" name="rating" min="1" max="5" class="form-control mr-2" placeholder="1-5">
 </div>
 <div class="form-group">
  <label for="review" class="mr-2">Comment:</label>
  <textarea id="review" name="review" class="form-control mr-2"></textarea>
 </div>
 <input type="submit" value="Submit" class="btn btn-primary">
</form>

@if(isset($reviews))
  @foreach($reviews as $review)
      <div class="card" style="width: 18rem;">
          <div class="card-body">
              <p class="card-text">User: {{ $review->username }}</p>
              <p class="card-text">Film: {{ $review->film_title }}</p>
              <h5 class="card-title">Rating: {{ $review->rating }}</h5>
              <h5 class="card-title">
                {!! str_repeat('<i class="fas fa-star"></i>', $review->rating) !!}
                {!! str_repeat('<i class="far fa-star"></i>', 5 - $review->rating) !!}
            </h5>
              <p class="card-text">Review: {{ $review->review }}</p>
          </div>
      </div>
  @endforeach
@endif


