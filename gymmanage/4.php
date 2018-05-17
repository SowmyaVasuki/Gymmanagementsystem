<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');

    if(@$_POST["Change_scheme"])
    {
        $name = @$_POST["memname"];
        $schemenew = @$_POST["mem_sch"];
        
        $res = $gym->update_scheme($name,$schemenew);
        echo "Your Previous Scheme:" ;
        echo $res;
        echo "<br>";
        echo "Your Current Scheme:" ;
        echo $schemenew;        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:#963378">
<center><table><tr>
<td><form method="POST" action="" name="Change_scheme" >
    <p style="margin-top: 250px;">Name : <input type="text"  name="memname" id="memname" required><br>
   SCHEME : <select name="mem_sch">
    <option value="SILVER">SILVER</option>
    <option value="GOLD">GOLD</option>
    <option value="DIAMOND">DIAMOND</option>
    <option value="PLATINUM">PLATINUM</option></select><br>
    <input type="submit" name="Change_scheme" value="Update">
</form></td>
<td><img src="https://www.nationalsportstalenthunt.com/iFileSAI/img/schemes.png"></td>
</tr>
</table>
</center>
</body>

</html>

