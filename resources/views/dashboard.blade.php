@extends('layouts.app')

@section('content') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <a id="user-list" href="{{ route('client.index') }}" style="text-decoration: none;">HOME &nbsp</a>
            <a id="film-list" href="{{ route('dashboard.index') }}" style="text-decoration: none;">DASHBOARD &nbsp</a>


                <div class="card">
                    <div class="card-header">Welcome to Moviefy!</div>
                    <div class="card-body">
                    <div>
                        <p>NAME: <br> {{ $user->name }}</p>
                        <p>EMAIL: <br> {{ $user->email }}</p>
                        <p>BIRTHDAY: <br> {{ $user->dob }}</p>
                        <p>GENDER: <br> {{ $user->gender }}</p>
                        
                        <!-- Display other user details as needed -->
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
    </div>    
@endsection

