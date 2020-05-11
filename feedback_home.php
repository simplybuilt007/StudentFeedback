<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['checker']!=1){
    header("Location:index.php");
  }
?>
<html>
<head>
  <SCRIPT type="text/javascript">
    window.onload = function(){
    window.history.forward();
    function noBack(){
    window.history.forward();
  }
}
</SCRIPT>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333333;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 10%;
    background-color: #858585;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;    
}

li a.active {
    background-color: rgb(2, 2, 2);
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

#logo{
  float: left;
  color:white;
  margin-top:5px;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;  
}

.logout{
  float: right;
  color: #FFFFFF; 
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.logout {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 17px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.logout span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.logout span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.logout:hover span {
  padding-right: 25px;
}

.logout:hover span:after {
  opacity: 1;
  right: 0;
}

#logo{
    -webkit-animation: color-change 2s infinite;    
}

@keyframes color-change {
    0% { color: red; }
    50% { color: greenyellow; }
    100% { color: rgb(255, 0, 221); }
}

</style>
</head>
<body>
    

<div class="topnav">
  <a id="logo">FEEDBACK</a>
  <button class="logout" onclick="location.href='logout.php';" style="vertical-align:middle"><span>Logout</span></button>
</div>
  
<ul style="text-align: left;">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">My feedbacks</a></li>
  <li><a href="#contact">Comments</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style="margin-left:10%;padding:1px 16px;height:1000px;">
  <p>Some text..</p>
  <p>Some text..</p>
  <!--<p><?php echo $_SESSION['checker']; ?></p>-->
</div>

</body>
</html>