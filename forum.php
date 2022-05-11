<?php
    //placeholder while we set up the database and retrieve info that way
    //clears error messages just to layout the page
    error_reporting(E_ERROR | E_PARSE);
    $forum_name = $_GET["forum_name"];
    $forum_count = $_GET["numFollow"];
    $forum_banner = $_GET["bannerPath"];
    $top1 = $_GET["post_1"];
    $top1_user = $_GET["post_1_user"];
    $top1_title = $_GET["post_1_title"];
    $top2 = $_GET["post_2"];
    $top2_user = $_GET["post_2_user"];
    $top2_title = $_GET["post_2_title"];
    $top3 = $_GET["post_3"];
    $top3_user = $_GET["post_3_user"];
    $top3_title = $_GET["post_3_title"];
    include("top.php");
?>
<div class = "forum_banner">
    <div class = "forum_name_body">
        <div id = "forum_name">
            <h1><?=$forum_name?></h1>
        </div>
    </div>
    <div class = "follow_button">
        <?php
        //code to see if user is logged in, if follows forum, or if does not follow forum
        //we have limited time so for now lets just not implement this
        ?>
    </div>

</div>
<!-- this is a div to contain all the post that will be featured on the forum page -->
<div class = "top_post_body">
    <div class = "post_body">
        <div class = "user">
            <!-- here will go user profile picture and username
            will float to the left in the post_body -->
        </div>
        <div class = "post_title">
           <h1><?=$top1_title?></h1> 
        </div>
        <div class = "post_text">
            <p><?=$top1?></p>
        </div>
    </div>
</div>




<?php include("bottom.html"); ?>