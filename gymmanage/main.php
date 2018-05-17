
<?php
require_once('C:/wamp64/www/gymmanage/config.php');

require_once('func.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script>
    
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
<style >
    #bg{
background-repeat:no-repeat;
background-size: cover;
}
body {
    font-family: "Lato", sans-serif;
}
table,tr,td{
    border: 2px solid black;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.dropbtn {
    background-color: #111;
    color: white;
    padding: 16px;
    width:300px;
    font-size: 25px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 16px;
}

.dropdown-content a:hover {background-color: #686060}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #323030;
}

</style>
</head>
<body id="bg" background="https://cdn-mf0.heartyhosting.com/sites/mensfitness.com/files/styles/gallery_slideshow_image/public/1280-gym-equipment.jpg?itok=5g_zwuLb">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="dropdown">
  <button class="dropbtn">Member</button>
  <div class="dropdown-content">
    <a href="http://localhost/gymmanage/1.php/">Add Member</a>
<a href="http://localhost/gymmanage/3.php/">Withdraw Membership</a>
    <a href="http://localhost/gymmanage/8.php/">Monitor enrollment</a>
    <a href="http://localhost/gymmanage/4.php/">Change Scheme</a>
    <a href="http://localhost/gymmanage/10.php/">Scheme-wise members list</a>
  </div>
</div><br>
<div class="dropdown">
  <button class="dropbtn">Equipment</button>
  <div class="dropdown-content">
    <a href="http://localhost/gymmanage/2.php/">Add Equipment </a>
<a href="http://localhost/gymmanage/7.php/">Equipment Details</a>
    <a href="http://localhost/gymmanage/9.php/">Equipment List Branch-Wise</a>
  </div>
</div><br>
  <div class="dropdown">
  <button class="dropbtn">Employee</button>
  <div class="dropdown-content">
   <a href="http://localhost/gymmanage/5.php/">Employement pattern</a>
  <a href="http://localhost/gymmanage/6.php/">Employee details</a>
  
<a href="http://localhost/gymmanage/11.php/">Add Employee</a>
  </div>
</div><br>
  
   
  
  
</div>
<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()"><img src="https://cdn0.iconfinder.com/data/icons/fitness-filled/64/fitness-04-48.png">Services</span>
<table style="margin-top: 200px;margin-left: 850px;border-radius: 1px;">
    <tr><td>Available Schemes</td>
        <td>Duration</td></tr>
        <tr><td>SILVER</td>
        <td>1 Month</td></tr>
        <tr><td>GOLD</td>
        <td>3 Months</td></tr>
        <tr><td>DIAMOND</td>
        <td>6 months</td></tr>
        <tr><td>PLATINUM</td>
        <td>1 Year</td></tr>
</table>
</body>
</html>







