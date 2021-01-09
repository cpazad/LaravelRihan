<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Personal Profile</h2>
				<table>
				<tr>
				<td>Name</td>
				<td>{{$staf -> Name}}</td>
				</tr>
				<tr>
				<td>Email</td>
				<td>{{$staf -> email}}</td>
				</tr>
				<tr>
				<td>Username</td>
				<td>{{$staf -> uname}}</td>
				</tr>
				<tr>
				<td>Age</td>
				<td>{{$staf -> age}}</td>
				</tr>
				</table>
				
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>