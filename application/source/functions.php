<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <?php
        $name = 'bob';
        function upper($word){
            $wordtab = str_split($word);
            $wordtab[0] = strtoupper($wordtab[0]);
            $wordres = implode($wordtab);
            return $wordres;
        }
        echo upper($name);
        echo "<br>";
        
        $date = new DateTime("now");
        echo $date->format("Y-m-d H:i:s");
        echo "<br>";
        echo $date->format("Y");
        echo "<br>";

        function summ($nb1, $nb2){
            if (is_int($nb1) && is_int($nb2)){
                return $nb1+$nb2;
            }
            else {
                echo "nan";
            }
        }

        echo summ(5,3);
        echo "<br>";

        function accro($str){
            $strtab = explode(" ", $str);
            $accro = "";
            foreach ($strtab as $str){
                $strsplit = str_split($str);
                $accro .= $strsplit[0];
            }
            return $accro;
        }

        echo accro("nique sa mère");
        echo "<br>";

        function ae($word){
            $wordtab = str_split($word);
            for ($i=0;$i<count($wordtab);$i++){
                if ($wordtab[$i] === "a" && $wordtab[$i+1] === "e"){
                    $wordtab[$i] = "æ";
                    unset($wordtab[$i+1]);
                    break;
                }
            }
            $res = implode($wordtab);
            return $res;
        }

        echo ae("chaenichthys");
        echo "<br>";

        function ae2($word) {
            $result = str_replace("æ", "ae", $word);
            return $result;
        }
        
        echo ae2("chænichthys");  
        echo "<br>";

        function notwaror($message, $class) {
            
        }
    ?>
    <a href="../index.php">index</a>
</body>

</html>