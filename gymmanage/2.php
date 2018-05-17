
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style >
        #bg{
            
           margin-left: 250px;
            height: 500px;
            width: 650px;
        }
    </style>
</head>
<body>
   <center> <h1 style="font-family:Courier New;font-size: 50px;">Add Equipment</h1></center>
<table><tr>
<td><form method="POST" action="" name="addequipment" >
   <p style="font-size: 25px;"> Name : <input type="text"  name="eqname" id="eqname" required><br><br>
    Type: &nbsp&nbsp &nbsp<input type="text" name="mem_ty" id="mem_ty" required><br><br>
   Vendor : <input type="text" name="mem_ven" id="mem_ven" required><br><br>
   Warranty Info : <input type="text" name="mem_war" id="mem_war" required><br>
    (enter the No. of months)   <br><br>
    <input type="submit" name="insert_equipment" value="Add Equipment">
</form></td>
<td><img id="bg" src="https://n2.sdlcdn.com/imgs/b/w/1/Wolphy-10kg-Home-Gym-Set-SDL673260416-1-a8c22.jpg"></td>


</p>
</table>
</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');

require_once('func.php');

    if(@$_POST["insert_equipment"])
    {
        $ename = @$_POST["eqname"];
        $type = @$_POST["mem_ty"];
        $vendor = @$_POST["mem_ven"];
        $warranty = @$_POST["mem_war"];
        
        
        $res = $gym->insert_equipment($ename, $type, $vendor,$warranty);

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
</html>

