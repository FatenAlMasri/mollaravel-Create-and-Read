
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Our Staff</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="jumbotron">
  <center><h3 class="display-4">Ministry Of Labour</h3></center>

  <hr class="my-4">
  
</div>

	<center><table class="table table-borderless">
       <th colspan="4" class="line">Our Staff</th>
		<tbody>
			@foreach($Staff as $staff)
			<tr>
			<td >{{$staff['Emp_name']}}</td>
			<td><img src="{{$staff['Emp_img']}}" class="rounded-circle"> </td>
					<td>{{$staff['Age']}}</td>
					<td><a href="{{$staff['Github']}}"  target="_blank">View</a></td>
			</tr>
			@endForeach
		</tbody>

		
      
</table></center>
</body>
</html>