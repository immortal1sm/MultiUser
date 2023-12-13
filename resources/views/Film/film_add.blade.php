<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>
</head>
<body>
    <h1>ADD FILMS</h1>
    <form action="/Film" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{old('title')}}">
        @error('title')
        <span style="color: red;">*required</span>
        @enderror
        <br>
        <input type="time" name="date" placeholder="Date" value="{{old('date')}}">
        @error('date')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="director" placeholder="Director" value="{{old('director')}}">
        @error('director')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="genre" placeholder="Genre" value="{{old('genre')}}">
        @error('genre')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="cast" placeholder="Cast" value="{{old('cast')}}">
        @error('cast')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="plot" placeholder="Plot" value="{{old('plot')}}">
        @error('plot')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="file" name="img" placeholder="Image" value="{{old('img')}}">
        @error('img')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="rating" placeholder="Rating" value="{{old('rating')}}">
        @error('rating')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="ADD">
    </form>
    <a href="/subjects/">Back</a><br>
</body>
</html>