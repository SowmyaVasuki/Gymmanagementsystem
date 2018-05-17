
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        #bg{
            background-repeat: no-repeat;
            background-size: cover;
        }
        div.background {
  
   background-size:cover;
    background-repeat:no-repeat;
}

div.transbox {
    border-radius: 25px;
  margin-left: 700px;
  margin-right: 300px;
  height:180px;
  margin-top: 75px;
  background-color: grey;
  border: 0.5px  black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  width: 500px;
}

div.transbox p {
  margin: 10%;
font-size: 35px;
  font-weight: bold;
  color: #000000;
}
    </style>
</head>
<div class="background">
<body id="bg" background="http://www.personalitytutor.com/files/2012/04/Gym-Etiquette.jpg">

<div class="transbox" id="box"><form method="POST" action="" name="scheme" >
   <p ><center><br>Enter the Scheme to check the Members enrolled under it<br><br> <select name="sch">
    <option value="SILVER">SILVER</option>
    <option value="GOLD">GOLD</option>
    <option value="DIAMOND">DIAMOND</option>
    <option value="PLATINUM">PLATINUM</option>
  </select><br><br>
    
    <input type="submit" name="scheme" value="Check"></p></center>
</form>
</div>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');

    if(@$_POST["scheme"])
    {
        $scheme = @$_POST["sch"];
        $res=array();
        $res = $gym->schemeque($scheme); 
        echo "<div class='transbox'>";
        foreach ($res as $key) {
            # code...
            
            //echo "<p style='margin-left: 700px;margin-right: 300px;'>";
            echo "<p style='color:black;font-size:25px;'>";
            echo $key['name'];
            echo "<br>";
            echo "</p>";
            
            
        }
        echo "</div>";       
    }
?>

</body>

</html>

