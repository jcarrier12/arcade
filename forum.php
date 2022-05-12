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
    $usernames = array($top1_user, $top2_user, $top3_user);
    $titles = array($top2_title, $top2_title, $top3_title);
    $texts = array($top1, $top2, $top3);

    include("top.php");
?>
<div class = "forum_banner">
    <div class = "forum_name_body">
        <div id = "forum_name">
            <h1><?=$forum_name?></h1>
        </div>
    </div>
</div>
<!-- this is a div to contain all the post that will be featured on the forum page -->

<?php
    for($i = 0; $i < 3; $i++){
        ?>
        <div class = "top_post_body">
            <div class = "post_body">
                <div id = "username">
                    <h1><?=$usernames[$i]?></h1>
                </div>
                <div class = "post_title">
                    <h1><?$titles[$i]?></h1>
                </div>
                <div class = "post_text">
                    <p><?=$texts[$i]?></p>
                </div>
            </div>
        </div>
        <?php
    }
?>



<?php include("bottom.html"); ?>