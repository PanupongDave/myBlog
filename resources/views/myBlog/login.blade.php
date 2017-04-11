@extends('myBlog.component.master')
@section('title','Login')
@section('content')
	
<style type="text/css">




.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
	


</style>



	<div class="jumbotron" style="background:lightpink">
		<div class="row" style="margin-top:0px">
		    <div class="col-xs-12 col-sm-8 col-md-6 ">
	    	
				<form role="form" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<fieldset>
						<div class="page-header">
    					<h1>Please Sign In</h1>      
  						</div>
						

						<a href="#" class="btn btn-info btn-xs active">Facebook</a>
						<a href="#" class="btn btn-danger btn-xs active">Google</a>
						<a href="#" class="btn btn-primary btn-xs active">Twitter</a>

						<hr class="colorgraph">

						<div class="form-group">
		                    <input type="text" name="uesrname" id="username" class="form-control input-lg" placeholder="Username" value="{{ old('username') }}" required autofocus>
						</div>

						<div class="form-group">
		                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
						</div>

						<span class="button-checkbox">
							<button type="button" class="btn btn-danger" data-color="info">Remember Me</button>
		                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
							<a href="#" class="btn btn-link pull-right">Forgot Password?</a>
						</span>

						<hr class="colorgraph">


						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
		                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6">
								<a href="{{route('register')}}" class="btn btn-lg btn-primary btn-block">Register</a>
							</div>
						</div>


					</fieldset>
				</form>
			</div>
	</div>
			

		
	




@endsection


	
