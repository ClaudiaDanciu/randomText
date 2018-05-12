<?php
$fragments= array(
    'ate your sandwich',
    'wrote you a song',
    'called your cellphone',
    'borrowed your comb',
    'ate your dinner',
    'loves you',
    'need your help',
    'needs your hug',
);

$i = array_rand ($fragments);

$sentence = 'Ed Sheeran ' . $fragments[$i] . '.';
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
                background-image: url("sheeran.gif");
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
