<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        $pronouns = ['I', 'You', 'He/She','We', 'You', 'They'];
        foreach($pronouns as $pronoun){
            echo ucfirst($pronoun);
            if ($pronoun === 'He/She'){
                echo ' codes<br>';
            } else{
                echo " code<br>";
            }  
        }

        /*$index = 0;
        while ($index <= 120){
            echo "$index <br>";
            $index ++;
        }*/
        /*for ($i = 0; $i<=120; $i++){
            echo "$i <br>";
        }*/

        $startupdefou = ['Charles-eric', 'Jean-pierre', 'mojojojo', 'germain'];
        foreach ($startupdefou as $nom){
            echo "$nom <br>";
        }

        $countries = [
            "us" => "United States",
            "can" => "Canada",
            "uk" => "United Kingdom",
            "aus" => "Australia",
            "ger" => "Germany",
            "fr" => "France",
            "jp" => "Japan",
            "ch" => "China",
            "br" => "Brazil",
            "ind" => "India"
        ];

        echo "<select>";
        foreach ($countries as $key => $country){
            echo "<option value='$key'>$country</option>";
        }
        echo "</select><br>"
    ?>
    <a href="../index.php">index</a>
</body>
</html>