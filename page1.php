<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1 - Table du 3</title>
</head>
<body>
    <h1>Ceci est la table du 3</h1>
    <?php
        $number=3;
        for($i=1;$i<11;$i++){
            echo '- '.$number*$i.' <br>';
        }


    ?>
</body>
</html>