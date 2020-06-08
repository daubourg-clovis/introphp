<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
</head>
<body>
    <h1></h1>
    <form action="page4.php" method="post">
        <select name="tables" >
            <option  value="choix" selected>Choisir une table de multiplication</option>
            <option  value="1" >Table du 1</option>
            <option  value="2">Table du 2</option>
            <option  value="3">Table du 3</option>
            <option  value="4">Table du 4</option>
            <option  value="5">Table du 5</option>
            <option  value="6">Table du 6</option>
            <option  value="7">Table du 7</option>
            <option  value="8">Table du 8</option>
            <option  value="9">Table du 9</option>
            <option  value="10">Table du 10</option>
            <input type="submit" name="validate" value="Choisir">        
        </select>
        <input type="number" name="reponse">
        <input type="submit" value="OK" name="valider">
    </form>
    <?php
        $tables=$_POST['tables'];
        $number=intval($tables);
        if(isset($_POST['validate'])){
            for ($i=0;$i<11;$i++){
                $result=$i*$number;
            }

        }

    ?>
    
</body>
</html>