 <!DOCTYPE html>
<html>
<head>

<link href="http://localhost/2016-04-07589/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     
   <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/jquery.min.js"></script>
   <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/bootstrap.min.js"></script>
   
     <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/f.txt"></script>

	 <style>
	 body{
		 background-image: url('images/hodoo.jpg');
	 }
	 </style>
</head>
<body>
<div style="padding-left: 400px">
<div class="dropdown" >
  <button class="btn btn-default dropdown-toggle"style="width: 50%;"type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    KILIMO ONLINE
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Home</a></li>
    <li><a href="talk.php">Online Markerting</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="About.php">About us</a></li>
	 <li><a href="home.php">HOME</a></li>
  </ul>
</div>
</div>


<div style="padding-left: 400px">
<div id="carousel-example-generic" style="width: 50%;"class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/cooo.png" alt="..." width="100%" height="25%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/cooo.png" alt="..." width="100%" height="25%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div style="padding-left: 400px">
<form >
  <div class="form-group" style="width: 50%">
    <label for="exampleInputEmail1" style="width: 100%">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group" style="width: 50%">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
     
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>
<?php
?>