<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <h1>Choisissez les tables de multiplication que vous souhaitez afficher</h1>
    <form action="page3.php" method="post">
        <div name="multiplication">
            <input type="checkbox" value="1" name="tables[]">Table du 1 <br>
            <input type="checkbox" value="2" name="tables[]">Table du 2 <br>
            <input type="checkbox" value="3" name="tables[]">Table du 3 <br>
            <input type="checkbox" value="4" name="tables[]">Table du 4 <br>
            <input type="checkbox" value="5" name="tables[]">Table du 5 <br>
            <input type="checkbox" value="6" name="tables[]">Table du 6 <br>
            <input type="checkbox" value="7" name="tables[]">Table du 7 <br>
            <input type="checkbox" value="8" name="tables[]">Table du 8 <br>
            <input type="checkbox" value="9" name="tables[]">Table du 9 <br>
            <input type="checkbox" value="10" name="tables[]">Table du 10 <br>
        <input type="submit" name="validate" value="OK">
        </div>
    </form>
    <?php
        if(isset($_POST['tables'])){
            $tables=$_POST['tables'];          
            if(isset($_POST['validate'])){
                foreach($tables as $table){
                    echo 'Ceci est la table du '.$table.' <br>';
                    for($i=0;$i<11;$i++){
                        $resultat=$table*$i;
                        echo '- '.$table.' x '.$i.' = '.$resultat.' <br>';
                    }
                }
            }
        }


        

    ?>
    
</body>
</html>