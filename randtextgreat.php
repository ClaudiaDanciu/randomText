
<?php
//returns a random element from the array
function pick_random($array) {
 return $array[array_rand($array)];   
}
$subjects = array('Elvis', 'EdSheeran', 'Your husband', 'Your mama', 'My neighbor', 'God knows who', 'programmer');
$verbs = array('needs', 'wants', 'ate', 'felt', 'built', 'destroyed');
$quantities = array ('a', 'two', 'three', 'two dozen', 'fifty', 'some');
$adjectives=['new', 'large', 'cute', 'hot', 'wicked cool', 'scary',];
$objects = array('website', 'bath', 'pizza', 'kitten', 'bicycle');

$subject = pick_random($subjects);
if($subject != 'Elvis' && $subject != 'Your mama' && $subject != 'EdSheeran' && $subject != 'Your husband' && $subject != 'My neighbor'){
    $subject_quantity = pick_random($quantities);
    $subject_adjective = pick_random($adjectives);
    if ($subject_quantity != 'a') { $subject= $subject.'s';}
    $subject = $subject_quantity . " " . "$subject_adjective" . " " .$subject; 
}
$verb = pick_random($verbs);
$quantity = pick_random($quantities);
$adjective = pick_random($adjectives);
$object = pick_random($objects);

//pluralization
if ($quantity != 'a') { $object= $object.'s';}
$sentence = $subject . " " . $verb . " " . $quantity . " " . $adjective. " " . $object . '.';
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
                background: white;
                font-size: 40px;
                font-weight: bold;
                text-align: center;
                text-transform: uppercase;
                align-items: center;
            }
            p, a {
                color: blue;
            }
        </style>
    </head>
    <body>
        <a href='https://media.giphy.com/media/QgixZj4y3TwnS/giphy.gif'>
            <img src='baby.jpg' alt="claudiadanciu.com" width="400"  style="border-radius: 30%;"/>
        </a>
        <p><a href=""><?php echo ucfirst($sentence); ?></a></p>
    </body>
</html>
