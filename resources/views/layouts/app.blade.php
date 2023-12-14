<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>

    <!-- Styles -->

</head>
<style>
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
}
.card {
    position: relative;
    width: 650px;
    height: 420px;
    box-shadow: rgb(42, 38, 79) 0px 0px 10px;
    overflow: hidden;
    margin: 50px auto;
    background: rgb(42, 38, 79);
    border-width: 5px;
    border-style: solid;
    border-color: rgb(26, 22, 63);
    border-image: initial;
    border-radius: 3px;
}
</style>
<body>
    <div id="app">
        		<!-- Header -->
					<header id="header" class="alt">
						<a href="{{ url('/') }}" class="logo"><strong>Moviefy</strong> <span>by Laravel</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					
                <nav id="menu">
                    
                        <!-- Authentication Links -->
                        
                        @guest
                        <ul class="links">
                            @if (Route::has('login'))
                                <li >
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>   
                            @endif
                            @if (Route::has('register'))
                                <li >
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                        @else
                        <ul class="actions stacked">
                            <li >
                                <a   href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"  class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                   
                </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '289377444078119',
      cookie     : true,
      xfbml      : true,
      version    : '18.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    
    

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>
