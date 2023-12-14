<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>

    <title>FILMS</title>
</head>
<style>
    table {
        max-width: 100%;
    }
    .filmadd {
        justify-content: space-between;
        text-align: center;
        display: flex;
        width: 110%;
        
    }
    .filmadd h1 {
        justify-content: space-between;
        text-align: center;
        display: flex;
        float: left;
        
        
    }
    .filmadd a {
        justify-content: space-between;
        text-align: center;
        display: flex;
        float: right;
        
        
    }



</style>
<body>
        @if(session('store_films'))
        <span>{{session('store_films')}}</span>
        @endif
        @if(session('update_films'))
        <span>{{session('update_films')}}</span>
        @endif

            <h1>FILMS</h1>
        
        <a href="{{ route('films.add') }}" class="button small primary">ADD FILM</a>
        <a href="/admin/" class="button small">BACK</a><br>
       
        
        
    <div class="custom-search">
            <input class="form-control cutsom-input" type="search" placeholder="Search" data-table="table1" value=''> 
    </div> 

        <table class="table table-bordered table-striped table-hover table-dark table1"id="sortable">
            <thead>
                <tr>
                    <th onclick="sortBy(0)" scope="col">Image</th>
                    <th onclick="sortBy(1)" scope="col">Title</th>
                    <th onclick="sortBy(2)" scope="col">Date</th>
                    <th onclick="sortBy(3)" scope="col">Director</th>
                    <th onclick="sortBy(4)" scope="col">Genre</th>
                    <th onclick="sortBy(5)" scope="col">Cast</th>
                    <th onclick="sortBy(6)" scope="col">Plot</th>
                    <th onclick="sortBy(7)" scope="col">Rating</th>
                    <th onclick="sortBy(8)" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($films as $film)
<tr>
   <td>
   @if($film->img)
   <img src="{{ asset('storage/images/' . $film->img) }}" style=" width: 100px; height: 100px;">

{{-- <h1>{{$film->img}}</h1> --}}
@else 
 <span>No image found!</span>
@endif

   </td>
                <td>{{$film->title}}</td>
                <td>{{$film->date}}</td>
                <td>{{$film->director}}</td>
                <td>{{$film->genre}}</td>
                <td>{{$film->cast}}</td>
                <td>{{$film->plot}}</td>
                <td>{{$film->rating}}</td>
                <td>
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      
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