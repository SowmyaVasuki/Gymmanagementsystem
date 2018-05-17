
<?php
require_once('C:/wamp64/www/gymmanage/config.php');
//echo $_SESSION['user_id'];
require_once('func.php');
if(@$_POST["Login"])
    {
        $user = @$_POST["un"];
        $passw = @$_POST["pw"];
        
        $res = $gym->Login($user,$passw);
        if($res==TRUE)
        {
           

            echo "<script>window.location.href = 'main.php/';</script>";
        } 
        else
        {
            echo "sorry";
        }      
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
            

div.background {
  
   background-size:cover;
    background-repeat:no-repeat;
}

div.transbox {
    border-radius: 25px;
  margin-left: 300px;
  margin-right: 300px;
  height:200px;
  margin-top: 50px;
  background-color: #ffffff;
  border: 0.5px  black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  width: 500px;
}

div.transbox p {
  margin: 10%;
  font-weight: bold;
  color: #000000;
}
</style>
</head>
<div class="background" >
  <body  background="https://www.4seasonshotel.ie/cmsGallery/imagerow/6592/resized/1440x900/gym_monaghan.jpg">
 <center>   <h1 style="font-size: 50px;font-family: Comic Sans MS, cursive, sans-serif; color:">Gym Management System</h1><br><br><br><br>
<div class="transbox"><form method="POST" action="" name="Login" >
    <br><p style="font-size: 25px;font-weight: bold;">User Name : <input type="text"  name="un" id="un" required><br>
   &nbspPassword :  &nbsp&nbsp<input type="password" name="pw" id="pw" required><br> 
    <input type="submit" name="Login" value="Login"></center></p>
</form>
</div>
</div>
</body>
</html>



