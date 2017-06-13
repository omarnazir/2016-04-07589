<!DOCTYPE html>
<html lang="en">
<head>
  <title>store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
	  
	 

    }
  </style>
   <style>
	 body{
		 background-image: url('images/flower8.jpg');
	 }
	 </style>

</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Agriculture Store</h1>      
  
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://walete.blogspot.com/">Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homee.php">Home</a></li>
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span><a href="index.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">shamba</div>
        <div class="panel-body"><img src=" images/coo.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Carrots</div>
        <div class="panel-body"><img src="images/front1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Banana</div>
        <div class="panel-body"><img src="images/flower5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Cow</div>
        <div class="panel-body"><img src="images/cow1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">vegetables</div>
        <div class="panel-body"><img src="images/front.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Vegetables</div>
        <div class="panel-body"><img src="images/front8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy </div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>upload crop image</p>  
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</footer>

</body>
</html>