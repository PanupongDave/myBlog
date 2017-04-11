<!DOCTYPE html>
<html>
<head>
	<title>EasyJob - @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		body {

    background-color:  lightblue;

}
	</style>
</head>
<body>
	@include('myBlog.component.nav')

	<div class="container">
		<div class="jumbotron" style="background:#ffe6cc" >

			<h1>Welcome to EasyJobs.</h1>	
			<hr>
			<p>EasyJob is Application to help you find Job and part time.</p>
			<button class="btn btn-success btn-lg">More</button>

		</div>



  	

	@yield('content')




	


</div> 




<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>