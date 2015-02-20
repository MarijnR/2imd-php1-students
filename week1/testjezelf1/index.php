<?php

    $post = [
                [   "upicture"  => "https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg",
                    "username"  => "Theresa W.",
                    "checkin"   => "East river park",
                    "location"  => "Brooklyn, NY",
                    "picture"   => "http://static4.businessinsider.com/image/4de7acadccd1d5db11010000-1200/manhattan-bridge-tower-in-brooklyn-framed-through-nearby-buildings.jpg",
                    "date"      => 10
                ],
                [   "upicture"  => "https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg",
                    "username"  => "Nina M.",
                    "checkin"   => "Rubirosa",
                    "location"  => "New york, NY",
                    "picture"   => "",
                    "date"      => 23
                ],
                [   "upicture"  => "https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg",
                    "username"  => "Theresa W.",
                    "checkin"   => "Blue Bottle Coffee",
                    "location"  => "South of Market, SF",
                    "picture"   => "",
                    "date"      => 32
                ],
            ];



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook Timeline</title>
    <style>
        body
        {
            width: 250px;
        }

        .post
        {
            font-family: verdana;
            width: 250px;
            font-size: 16px;
            float: left;
            padding-top:10px;
            border-top: 1px solid lightgrey;
        }
        
        .post img
        {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            float: left;
            clear: both;
        }

        .post a:link,
        .post a:visited,
        .post a:hover,
        .post a:active{
            color: #14a9d6;
            text-decoration: none;
            font-weight: bold;
            float: left;
            font-size: 16px;
            padding-left: 10px;
        }

        .post article img{
            width: 200px;
            height: 200px;
            margin-left: 50px;
            border-radius: 0px;
            float: left;
        }

        article
        {
            /*float: left;*/
        }

        .post p 
        {
            color: #14a9d6;
            float: left;
            line-height: 0px;
            padding-left: 10px;
            display: block;
            font-weight: bold;
            text-align: left;
            width: 185px;
        }
        
        .clear
        {
            clear: both;
        }

        span
        {
            font-size: 14px;
            float: right;
            padding-bottom: 5px;
            padding-top: 5px;
            color: lightgrey;
        }

    </style>
</head>
<body>

    <?php  foreach($post as $p) {?>
    <div class="post">
        <img src="<?php echo $p['upicture']; ?>" alt="">

        <a href="#"><?php echo $p['username']; ?></a>
        
        <p><?php echo $p['checkin']; ?></p>
        <?php 
        if(!empty($p['picture'])){
            echo  "
                    <article>
                    <img src='" . $p['picture'] .  "'>

                    </article> 
                    ";
        }
        ?>
        <span><?php echo $p['date']."m"; ?></span>
    </div>
    <?php }?>


    
</body>
</html>