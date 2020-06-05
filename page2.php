<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="page2.php" method="post">
    <select name="multiplication" id="multiplication" method="post">
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
    </select>
    <input type="submit" name="validate" value="OK">
    </form>
    <?php
        if(isset($_POST['multiplication'])){
            $tables=$_POST['multiplication']; 
            $number=intval($tables);
            if(isset($_POST['validate'])){
                if($tables!='choix'){
                    echo 'Ceci est la table du '.$tables.' <br>';            
                }
                for ($i=0;$i<11;$i++){
                    $result=$i*$number;
                    if($tables!='choix'){
                        echo '- '.$number.' x '.$i.' = '.$result.' <br>';
                    }
                }
                
            }
        }
        


    ?>
    
</body>
</html>