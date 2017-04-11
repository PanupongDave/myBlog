<nav class="navbar navbar-default ">
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
										
			
				<a href="{{ url('/') }}" class="navbar-brand">EasyJob</a>			
			</div>

			 
			
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li></li>
				</ul>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul	class="nav navbar-nav navbar-right">
				@if(Auth::guest())
					<li><a href="{{route('register')}}">Sign Up</a></li>
					<li><a href="{{route('login')}}">Login</a></li>
				
				@else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                
                        <ul class="dropdown-menu" role="menu">
                            <li>

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>

                     </li>
                @endif
		        </ul>
			</div>	
		</div>	
	
	</nav>
	

	<style type="text/css" media="screen">


	@include('myBlog.colorNav.green')
		
	</style>