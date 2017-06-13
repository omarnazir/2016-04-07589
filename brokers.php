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
	border-style: solid;
    border-color: white;
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
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

div{
     width:800px;
	 height:50px;
	 margin: 0;
}



table {
    border-collapse: collapse;
    width: 800PX;
	
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}


</style>

<link href="http://localhost/2016-04-07589/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     
   <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/bootstrap.min.js"></script>
   
     <script type="text/javascript" src="http://localhost/2016-04-07589/bootstrap/js/f.txt"></script>

</head>
<body>


<div class="dropdown">
  <button class="dropbtn">KILIMO SHOP</button>
  <div class="dropdown-content">
    <a href="real.html" >About US</a>
    <a href="reg.html">Contact </a>
    <a href="index.php">HOME</a>
  </div>
</div>



 

 
<table>
  <tr>
    <th>Brokers</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>contact</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Peter</td>
    <td>Griffin</td>
    <td>0785 550005</td>
	
  </tr>
  <tr>
    <td>2</td>
    <td>Lois</td>
    <td>Griffin</td>
    <td>0785 550006</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Joe</td>
    <td>Swanson</td>
    <td>0785 550007</td>
  </tr>
  <tr>
     <td>4</td>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>0785 550009</td>

</tr>

</table>
</body>
</html>
<?php
?>
