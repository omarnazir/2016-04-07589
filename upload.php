<!DOCTYPE html>
<html lang="en">
<head>
<style>
	 body{
		 background-image: url('images/flower7.jpg');
	 }
	 </style>

  <title>Upload Image</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Fill the Form</h2>
  <p>The form below for uploading images of crops that you want to be advertised </p>
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Click me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>