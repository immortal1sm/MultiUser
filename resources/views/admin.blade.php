<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="is-preload">
    

@extends('layouts.app')

@section('content') 

<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/admin" class="logo"><strong>Moviefy</strong> <span>by Laravel</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
                <nav id="menu">
						<ul class="links">
							<li><a href="/admin" >Dashboard</a></li>
						</ul>
						<ul class="actions stacked">

							
						</ul>
					</nav>


				<!-- Main -->
                <div id="main" class="alt">
    
    <section id="one">
        
        <div class="inner">
        <header class="major">
                <ul class="actions">
                <li><a id="user-list" href="{{ route('users.show') }}" class="button" style="text-decoration: none;">USER LIST &nbsp</a></li>
                <li><a id="film-list" href="{{ route('films.show') }}" class="button" style="text-decoration: none;">FILM LIST &nbsp</a></li>
                <li><a id="user-reviews" href="{{ route('review_list.showReviews') }}" class="button" style="text-decoration: none;">USER REVIEWS</a></li>
                </ul>
        </header>
            <hr>

    <div class="container">

                        <div id="content">
                        <!-- The films will be loaded here -->
                        </div>
                        


        <script>

            $(document).ready(function(){
            $("#user-list").click(function(e){
            e.preventDefault(); // Prevent the default action
            $("#content").load("/admin/users/show"); // Load the user list into the "content" div
            });
            });

            $(document).ready(function(){
            $("#film-list").click(function(e){
            e.preventDefault(); // Prevent the default action
            $("#content").load("/admin/films/show"); // Load the films into the "content" div
            });
            });


            $("#user-reviews").click(function(e){
            e.preventDefault(); // Prevent the default action
            $("#content").load("/admin/review_list/showReviews"); // Load the user reviews into the "content" div
            });

        </script>

                    
<script>

cPrev = -1; 
           
function sortBy(c) {
    rows = document.getElementById("sortable").rows.length;
    columns = document.getElementById("sortable").rows[0].cells.length;
    arrTable = [...Array(rows)].map(e => Array(columns)); 

    for (ro=0; ro<rows; ro++) {
        for (co=0; co<columns; co++) { 
           
            arrTable[ro][co] = document.getElementById("sortable").rows[ro].cells[co].innerHTML;
        }
    }

    th = arrTable.shift();
    
    if (c !== cPrev) { 
        arrTable.sort(
            function (a, b) {
                if (a[c] === b[c]) {
                    return 0;
                } else {
                    return (a[c] < b[c]) ? -1 : 1;
                }
            }
        );
    } else { 
        arrTable.reverse();
    }
    
    cPrev = c; 

    arrTable.unshift(th); 

    for (ro=0; ro<rows; ro++) {
        for (co=0; co<columns; co++) {
            document.getElementById("sortable").rows[ro].cells[co].innerHTML = arrTable[ro][co];
        }
    }
}

</script>
           
        
    </div>  
    </div>
    </section> 
</div>  
@endsection
</body>
</html>



