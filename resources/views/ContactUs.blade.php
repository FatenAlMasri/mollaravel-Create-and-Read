<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Please Insert Youre Inforamtion Here</h2>
  
  <form action="/action_page.php">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="Email" name="Email">
    </div>
    
    <div class="form-group">
  <label for="comment">Message:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

    <button type="submit" class="btn btn-primary">Sent</button>
  </form>
</div>

</body>
</html>
