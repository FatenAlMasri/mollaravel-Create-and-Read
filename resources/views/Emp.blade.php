
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emp</title>
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
       <center><th colspan="4" class="line">Emp</th></center>
		<tbody>
			@foreach($Emp as $emp)
			<tr>
			<td >{{$emp}}</td>
			
			</tr>
			@endForeach
		</tbody>

		
      
</table></center>
</body>
</html>