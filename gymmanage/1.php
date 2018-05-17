
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style >
	#bg
	{
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<body id="bg" background="https://i2.wp.com/www.vrfitnessinsider.com/wp-content/uploads/2017/01/gym-membership.jpg?resize=534%2C301&ssl=1">

<form method="POST" action="" name="addmember" ><p style="font-size: 16px;">
    Name : &nbsp&nbsp<input type="text"  name="memname" id="memname" required><br><br>
    Address: <input type="text" name="mem_add" id="mem_add" required><br><br>
   	Contact : <input type="text" name="mem_contact" id="mem_contact" maxlength=10 required><br><br>
   	Workout : <input type="text" name="mem_phyfit" id="mem_phyfit" required><br><br>
   	SCHEME : <select name="mem_sch">
    <option value="SILVER">SILVER</option>
    <option value="GOLD">GOLD</option>
    <option value="DIAMOND">DIAMOND</option>
    <option value="PLATINUM">PLATINUM</option>
  </select><br><br>
    
    <input type="submit" name="insert_member" value="Add Member"></p>
</form>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');

    if(@$_POST["insert_member"])
    {
        $name = @$_POST["memname"];
        $address = @$_POST["mem_add"];
        $contact = @$_POST["mem_contact"];
        $fitness = @$_POST["mem_phyfit"];
        $scheme = @$_POST["mem_sch"];
        
        $res = $gym->insert_member($name, $address, $contact,$fitness,$scheme);

        if($res == True)
        {
            echo "Success";
        }
        else
        {
            echo "Fail";
        }
    }
?>



</body>

</html>

