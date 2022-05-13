<?php include("top.php"); 
$user=$_GET["user"]; 
$pass=$_GET["pass"];
?>
<div class = "login_body">
    
    <div class = "login_box">
        <div id = "login_text">
            <h1>Login</h1>
        </div>
        <div class = "login_form">
            <form action = "login.php">
                <fieldset>
                    <label><strong>Username</strong></label> </br>
                    <input type= "text" method= "get" name = "username" size = "30" id="user"> </br>
                    <label><strong>Password</strong></label> </br>
                    <input type = "password" method="get" name = "password" size = "30" id="pass"> </br>
                    <input type = "submit" value = "Login"/>
                </fieldset>
            </form>
            <?php
            $arr = file("users.txt");
            
            for($i = 0; $i < count(file("users.txt")); $i++){
                $exp = explode(';','');
                if($exp[0]== $user && $pass==$exp[2]){
                    echo "Location: home.php";
                }
            }
            ?>
        </div>
    </div>
</div>
