
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#bg{
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body id="bg" background="https://cdn.images.express.co.uk/img/dynamic/11/590x/secondary/Gym-membership-warning-1174191.jpg">

<center><h1 style="font-family: Courier New;font-size:35px;">Member-Workout List</h1></center>


</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');
		$res=array();        
        $res = $gym->membdata();
        echo "<font size='30'>";
        echo "<table style='margin-left: 830px;border:1px solid black;margin-top: 125px; font-size:25px;color:#3E1202;'>";
        echo "<tr style='border:1px solid black;'>";
        echo "<td style='border:1px solid black;'>";
        echo "Name";
        echo "</td>";
        echo "<td style='border:1px solid black;'>";
        echo "Workout";
        echo "</td>";
        echo "</tr>";
        foreach ($res as $vr) {
			# code...
			echo "<tr style='border:1px solid black;'>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['name'];
			echo "</td>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['phyfit'];
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		
              
?>
</html>

