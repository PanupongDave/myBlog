@extends('myBlog.component.master')
@section('title','Register')
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
		    	<h1>Please Sign Up </h1>  

						<a href="#" class="btn btn-info btn-xs active">Facebook</a>
						<a href="#" class="btn btn-danger btn-xs active">Google</a>
						<a href="#" class="btn btn-primary btn-xs active">Twitter</a>

	    	
				<form role="form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<fieldset>
						<div class="page-header">
    					    
  						</div>
						

						<hr class="colorgraph">

						<div class="form-group">
		                    <input type="text" name="uesrname" id="username" class="form-control input-lg" placeholder="Username" value="{{ old('username')}}" required >
						</div>

						<div class="form-group">
		                    <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name"  value="{{ old('name') }}" required autofocus>
						</div>


						<div class="form-group">
		                    <input type="email" name="email" id="emmail" class="form-control input-lg" placeholder="Email" value="{{ old('email')}}" required>
						</div>

						<div class="form-group">
		                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
						</div>

						<div class="form-group">
		                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Confirm Password" required>
						</div>

						

						<hr class="colorgraph">


						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
		                        <button type="submit" class="btn btn-lg btn-success btn-block" >Register</button>
							</div>


						</div>


					</fieldset>
				</form>
			</div>
	</div>
			

		
	




@endsection