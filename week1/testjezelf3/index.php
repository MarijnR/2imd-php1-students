<?php
// resultaa, normaal vanuit SQL/db


function cmp(array $a, array $b) 
{
    if ($a['postdate'] < $b['postdate']) 
    {
        return -1;
    } 
else if ($a['postdate'] > $b['postdate']) 
    {
        return 1;
    } 
else 
   {
        return 0;
    }
};
    $post = [
                [   "beschrijving"  => "verslag briefing",
                    "categorie"     => "school",
                    "postdate"      => 3
                ],
                [   "beschrijving"  => "taak engels",
                    "categorie"     => "school",
                    "postdate"      => 20
                ],
                [   "beschrijving"  => "taak2 MOR",
                    "categorie"     => "school",
                    "postdate"      => 1
                ],
                [   "beschrijving"  => "tandarts",
                    "categorie"     => "personal",
                    "postdate"      => 30
                ],
                [   "beschrijving"  => "Logo voorstel",
                    "categorie"     => "work",
                    "postdate"      => 36
                ],

            ]; //vanaf 5.4


usort($post, "cmp");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>todo list</title>
    <style>
        body{
            width: 400px;
        }
        .post
        {
            background-color:red;
            font-family: verdana;
            width: 400px;
            float: left;
        }
        
        .post2
        {
            background-color: orange;
            font-family: verdana;
            width: 400px;
            float: left;
        }

        .post3
        {
            background-color: green;
            font-family: verdana;
            width: 400px;
            float: left;
        }
    </style>
</head>
<body>
<?php  for($i=0;$i<count($post);$i++) {

    if( $post[$i]['postdate'] <= 2){
        $x = $post[$i]['postdate'];
        echo "<div class='post'>";
        echo "<h1>".$post[$i]['beschrijving']."</h1>";
        echo "</div>";
    } else if ( $post[$i]['postdate'] <= 24){
        $x = $post[$i]['postdate'];
        echo "<div class='post2'>";
        echo "<h1>".$post[$i]['beschrijving']."</h1>";
        echo "</div>";
    } else {
        $x = $post[$i]['postdate'];
        echo "<div class='post3'>";
        echo "<h1>".$post[$i]['beschrijving']."</h1>";
        echo "</div>";
    }
}?>
    


    
</body>
</html>