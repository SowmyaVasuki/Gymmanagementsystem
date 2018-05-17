
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		#bg
		{
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body id="bg" background="https://d126fxm3orgy3k.cloudfront.net/images/5398d9947293b47e4d000019/68407805_SyGm-8c4f/68407805_26.jpg?pid=5398d9bb0378151a0c0000e6&kid=571022d9e4b03742b989e359">
<center><h1 style="font-family: Courier New">Branch-Equipment List</h1></center>
</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');  
		$res=array();      
        $res = $gym->SCHL();
        $i=0;
        echo "<p style='margin-left:150px;font-size:25px;margin-top:75px;'>";
		foreach ($res as $key) {
			# code...

			if($i==0)
			{
				echo $key['brid'];
				echo ":";
				echo "<br>";
				$u1=$key['brid'];
			}
			if($u1!=$key['brid'])
			{
				echo $key['brid'];
				echo ":";
				echo "<br>";
				$u1=$key['brid'];
			}
			
			echo $key['ename'];
			echo "<br>";
			$u1=$key['brid'];
			$i=$i+1;
		}
		echo "</p>";
        
              
?>
</html>

