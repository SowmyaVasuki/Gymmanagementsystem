
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
        #bg
        {
            background-repeat: no-repeat;
            background-size: cover;
            height: 625px;
        }
    </style>
</head>
<body id="bg" background="https://www.zinghr.com/wp-content/uploads/2016/12/Employee-Creation-and-Hiring-Software-2.jpg">
<center><h1 style="font-family: Courier New">Branch-Employee List</h1></center>
</body>
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];

require_once('func.php');  
        $res=array();      
        $res = $gym->Emopl();
        $i=0;
        echo "<p style='margin-left:150px;font-size:25px;margin-top:75px;'>";
        foreach ($res as $key) {
            # code...

            if($i==0)
            {
                echo $key['brpid'];
                echo ":";
                echo "<br>";
                $u1=$key['brpid'];
            }
            if($u1!=$key['brpid'])
            {
                echo $key['brpid'];
                echo ":";
                echo "<br>";
                $u1=$key['brpid'];
            }
            
            echo $key['name'];
            echo "<br>";
            $i=$i+1;
        }
        echo "</p>";
        
              
?>
</html>

