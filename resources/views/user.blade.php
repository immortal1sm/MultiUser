<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
        @if(session('store_users'))
        <span>{{session('store_users')}}</span>
        @endif
        @if(session('update_users'))
        <span>{{session('update_users')}}</span>
        @endif
        <h1>USERS</h1>
        <!-- <a href="/users/create/">Add User</a> -->
        <table class="table table-bordered table-striped table-hover table-dark">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">B-DAY</th>
                    <th scope="col">GENDER</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $users)
                <tr>
                    <td>{{$users->id}}</td>
                    
                    <td>{{$users->name}}</td>
                    
                    <td>{{$users->email}}</td>
                    
                    <td>{{$users->dob}}</td>
                    
                    <td>{{$users->gender}}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <a href="/admin/">Go to Dashboard</a><br>

</body>
</html>