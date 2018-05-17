
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

<body id="bg" background="http://cdn2.itpro.co.uk/sites/itpro/files/styles/article_main_wide_image/public/images/dir_181/it_photo_90982.jpg?itok=T8_Krdtr">

<center><h1 style="font-family: Courier New;font-size:35px;">Employee-Profession List</h1></center>


</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');
		$res=array();        
        $res = $gym->empdata();
        echo "<font size='30'>";
        echo "<table style='margin-left: 50px;border:1px solid black;margin-top: 125px; font-size:25px;color:#3E1202;'>";
        echo "<tr style='border:1px solid black;'>";
        echo "<td style='border:1px solid black;'>";
        echo "Name";
        echo "</td>";
        echo "<td style='border:1px solid black;'>";
        echo "Profession";
        echo "</td>";
        echo "</tr>";
        foreach ($res as $vr) {
			# code...
			echo "<tr style='border:1px solid black;'>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['name'];
			echo "</td>";
			echo "<td style='border:1px solid black;'>";
			echo $vr['profession'];
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		
              
?>
</html>

