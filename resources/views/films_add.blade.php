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
.card {
    position: relative;
    width: 850px;
    height: 900px;
    box-shadow: rgb(42, 38, 79) 0px 0px 10px;
    overflow: hidden;
    
    background: rgb(42, 38, 79);
    border-width: 5px;
    border-style: solid;
    border-color: rgb(26, 22, 63);
    border-image: initial;
    border-radius: 5px;
}
.card h3 {
    font-size: 3em;
    justify-content: center;
    text-align: center;
    color: white;
    
}
.card-items {
    display: flex;
    justify-content: center;
    align-items: center;
    
    box-shadow: rgb(42, 38, 79) 0px 0px 10px;
    overflow: hidden;
    
    background: rgb(42, 38, 79);
    
    border-style: solid;
    border-color: rgb(26, 22, 63);
    border-image: initial;
    border-radius: 3px;
    
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

<div class="container">
   <div >
       <div >
           <div class="card">
               <h3>ADDING FILM FORM</h3>

               <div class="card-items" >
                  <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data">
                      @csrf

                      <div >
                          <label >Title</label>

                          <div >
                              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                              @error('title')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                    <div >
                        <label >Date</label>

                        <div >
                            <input id="date" type="number" min="1900" max="2023" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div >
                          <label for="director" class="col-md-4 col-form-label text-md-right">Director</label>

                          <div >
                              <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ old('director') }}" required autocomplete="director" autofocus>

                              @error('director')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="genre" class="col-md-4 col-form-label text-md-right">Genre</label>

                          <div >
                              <input id="genre" type="number" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                              @error('genre')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="cast" class="col-md-4 col-form-label text-md-right">Cast</label>

                          <div >
                              <input id="cast" type="text" class="form-control @error('cast') is-invalid @enderror" name="cast" value="{{ old('cast') }}" required autocomplete="cast" autofocus>

                              @error('cast')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                          <label for="plot" class="col-md-4 col-form-label text-md-right">Plot</label>

                          <div >
                              <input id="plot" type="text" class="form-control @error('plot') is-invalid @enderror" name="plot" value="{{ old('plot') }}" required autocomplete="plot" autofocus>

                              @error('plot')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                          </div>
                      </div>
                      <div >
                        <label for="img" class="col-md-4 col-form-label text-md-right">Image</label>

                        <div >
                        <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus>
                            <img id="preview" src="#" alt="Image preview" style="display: none; width: 100px; height: 100px;">
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                      

                      <div >
                          <div >
                              <button type="submit" class="btn btn-primary">
                              {{ __('Save') }}
                              </button>
                          </div>
                      </div>
                      
                  </form>

                  

                  <script>
                    document.getElementById('img').addEventListener('change', function(e) {
                    var img = document.getElementById('preview');
                    img.src = URL.createObjectURL(e.target.files[0]);
                    img.style.display = 'block';
                    });
                    </script>




               </div><a href="/admin/">Go Back</a><br>
           </div>
       </div>
   </div>
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