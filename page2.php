<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="page2.php" method="post" name="tables">
    <select name="multiplication" id="multiplication">
        <option value="" selected>Choisir une table de multiplication</option>
        <option  value="Table du 1" >Table du 1</option>
        <option  value="Table du 2">Table du 2</option>
        <option  value="Table du 3">Table du 3</option>
        <option  value="Table du 4">Table du 4</option>
        <option  value="Table du 5">Table du 5</option>
        <option  value="Table du 6">Table du 6</option>
        <option  value="Table du 7">Table du 7</option>
        <option  value="Table du 8">Table du 8</option>
        <option  value="Table du 9">Table du 9</option>
        <option  value="Table du 10">Table du 10</option>
    </select>
    <input type="submit" name="validate" value="OK">
    </form>
    <?php
        $tables=array($_POST['tables']);
        $number=x;
        if(isset($_POST['validate'])){
            echo 'Ceci est la table du '.$number.'';
            foreach($_POST as $tables){
                for ($i=1;$i<11;$i++)
                $result=$i*$number;
                echo '- '.$i.' x '.$number.' = '.$result.' <br>';
            }
        }
        


    ?>
    
</body>
</html>