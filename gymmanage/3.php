<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');

    if(@$_POST["leave"])
    {
        $ename = @$_POST["eqname"];
        
        
        $res = $gym->remove_member($ename);

        if($res == TRUE)
        {
            echo "Success";
        }
        else
        {
            echo "Fail";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
<center><h1 style="font-size: 35px;font-family: Courier New;">Withdrawal</h1></center>
<form method="POST" action="" name="leave" >
    <p style="font-size: 20px;margin-top: 50px;">Enter the Name of the member you want to remove: <br><input type="text"  name="eqname" id="eqname" required><br>
    <input type="submit" name="leave" value="Withdraw"> //used at post request 
   </p>
</form>
<img style="margin-left: 700px;" src="https://i.ytimg.com/vi/VLIUJDNDjNE/hqdefault.jpg">


</body>

</html>

