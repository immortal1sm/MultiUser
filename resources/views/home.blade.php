	@extends('layouts.app')
	@section('content') 
	<body class="is-preload">

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>{{ __('Dashboard') }}</h1>
							</header>
							<div class="content">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('You are logged in!') }}
                           
                            <ul class="actions">
                            <li><a href="/admin" class="button next scrolly">Go to Dashboard</a></li>
                            </ul>

						</div>
					</section>

			</div>

 
</section>

</body>
</html>