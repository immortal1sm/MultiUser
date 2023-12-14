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
<style>
    
</style>
<body>
        @if(session('store_users'))
        <span>{{session('store_users')}}</span>
        @endif
        @if(session('update_users'))
        <span>{{session('update_users')}}</span>
        @endif
        <h1>USERS</h1>
        <!-- <a href="/users/create/">Add User</a> -->
        <table class="table table-bordered table-striped table-hover table-dark" id="sortable">
            <thead>
                <tr>
                    <th onclick="sortBy(0)" scope="col">ID</th>
                    <th onclick="sortBy(1)" scope="col">NAME</th>
                    <th onclick="sortBy(2)" scope="col">EMAIL</th>
                    <th onclick="sortBy(3)" scope="col">B-DAY</th>
                    <th onclick="sortBy(4)" scope="col">GENDER</th>
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
</body>
</html>