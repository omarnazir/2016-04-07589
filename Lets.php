<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width: 800px;
	 
     
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
  
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
*{
padding:auto;
margin:auto;
text-align:center;
}
form {
  background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  
  position: relative;
  width: 780px;
  height: 200px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  font-style: italic;
  line-height: 24px;
  font-weight: bold;
  color: #09C;
  text-decoration: none;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid #999;
  border: inset 1px solid #333;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
</style>

<link href="http://localhost/2016-04-07589/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     
   <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/bootstrap.min.js"></script>
   
     <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/f.txt"></script>

</head>
<body>


<div class="dropdown">
  <button class="dropbtn">ONLINE MARKETING</button>
  <div class="dropdown-content">
    <a href="#" >About US</a>
    <a href="#">Contact </a>
    <a href="#">HOME</a>
  </div>
</div>
 


 <form >
  <div>
    <h1>Lets Talk</h1>
    <label>
      <span>Your name</span><input id="name" type="text" name="name" /><br>
    </label>
 
    <label>
      <span>Email Address</span><input id="email" type="text" name="email" /><br>
    </label>

    <label>
      <span>Sell/Buy</span><input id="subject" type="text" name="subject" /><br>
    </label>

    <label>
      <span>Message</span><textarea id="feedback" name="feedback"></textarea>
      <input type="button" value="Send" />
    </label>

  </div>
</form>

 
  
 
</div>
</body>
</html>
<?php
?>