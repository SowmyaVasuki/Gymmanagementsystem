
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

<body id="bg" background="https://www.dellanave.com/wp-content/uploads/2017/10/150507-F-PJ403-022-700x300.jpg">

<center><h1 style="font-family: Courier New;font-size:35px;">Equipment-Vendor List</h1></center>


</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');
		$res=array();        
        $res = $gym->equidata();
        echo "<font size='30'>";
        echo "<table style='margin-left: 700px;border:1px solid black;margin-top: 300px; font-size:25px;color:#3E1202;'>";
        echo "<tr style='border:1px solid black;'>";
        echo "<td style='border:1px solid black;'>";
        echo "Name";
        echo "</td>";
        echo "<td style='border:1px solid black;'>";
        echo "Vendor";
        echo "</td>";
        echo "</tr>";
        foreach ($res as $vr) {
			# code...
			echo "<tr style='border:1px solid black;'>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['ename'];
			echo "</td>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['vendor'];
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
              
?>
</html>

