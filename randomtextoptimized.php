<?php
//returns a random element from the array
function pick_random($array) {
 return $array[array_rand($array)];   
}
$subjects = array('Elvis', 'EdSheeran', 'Your husband', 'Your mama', 'My neighbor', 'God knows who');
$verbs = array('needs', 'wants', 'ate', 'felt', 'built', 'destroyed');
$objects = array('a website', 'a bath', 'a large pizza', 'three kittens', 'a new bicycle');

$sentence = pick_random($subjects) . " " . pick_random($verbs) . " " . pick_random($objects) . '.';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random Sentence</title>
        <style type="text/css">
            body {
                margin :5px;
                padding: 0;
                background: url("sheeran.gif");
                font-size: 40px;
                font-weight: bold;
                text-align: center;
                text-transform: uppercase;
            }
            p, a {
                color: white;
            }
        </style>
    </head>
    <body>
        <p><a href=""><?php echo $sentence; ?></a></p>
    </body>
</html>
