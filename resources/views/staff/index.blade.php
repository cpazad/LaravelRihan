<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Crud</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap-table ">
	<a class="btn btn-primary" href="{{route('staff.create')}}">Add New Staff</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Staff</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Age</th>
							<th>Time</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($All_data as $staff)
						<tr>
							<td>{{loop -> index + 1}}</td>
							<td>{{$staff -> name}}</td>
							<td>{{$staff -> email}}</td>
							<td>{{$staff -> cell}}</td>
							<td>{{$staff -> uname}}</td>
							<td>{{$staff -> age}}</td>
							<td>{{$staff -> create_at}}</td>
							<td>{{$staff -> photo}}</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{route('staff.show', $staff -> id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="{{route('staff.delete', $staff -> id)}}">Delete</a>
							</td>
						</tr>
						@endforeach
						

					</tbody>
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