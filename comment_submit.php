<?php
    $user = $_GET["user"];
    $comment = $_GET["comment"];
    $game =  $_GET["game"];
    $file = $game."_".$count.".txt";
    $text = $user.",".$comment;
    file_put_contents($file, $text);
?>

<a href = "post.php?game=<?=$game?>">Back to post</a>