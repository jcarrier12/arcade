<?php
    $user = $_GET["user"];
    $pass = $_GET["pass"];

    $arr = file("users.txt");
            
    for($i = 0; $i < count($arr); $i++){
        $exp = explode(";",$arr[$i]);
        echo $exp[0];
        if($exp[0]== $user && $pass==$exp[2]){
            echo "right";
            
        }
        else{
            echo "wrong";
            header("login.php");
        }
    }
?>