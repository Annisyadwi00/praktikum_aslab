<?php
$data= ["Annisya Dwi", "xoxo", "LOL"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initiation-scale=1.0">
        <title> PHP IN HTML </title>

    </head>
<body>
    <ul>
        <?php
        for( $i= 0; $i<count($data); $i++ ) {
            echo "<li>". $data[$i] ."</li>";
        }
        ?>
    </ul>
    </body>
</html>