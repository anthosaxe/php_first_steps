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
    function upper($word)
    {
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

    function summ($nb1, $nb2)
    {
        if (is_int($nb1) && is_int($nb2)) {
            return $nb1 + $nb2;
        } else {
            echo "nan";
        }
    }

    echo summ(5, 3);
    echo "<br>";

    function accro($str)
    {
        $strtab = explode(" ", $str);
        $accro = "";
        foreach ($strtab as $str) {
            $strsplit = str_split($str);
            $accro .= $strsplit[0];
        }
        return $accro;
    }

    echo accro("nique sa mère");
    echo "<br>";

    function ae($word)
    {
        $wordtab = str_split($word);
        for ($i = 0; $i < count($wordtab); $i++) {
            if ($wordtab[$i] === "a" && $wordtab[$i + 1] === "e") {
                $wordtab[$i] = "æ";
                unset($wordtab[$i + 1]);
                break;
            }
        }
        $res = implode($wordtab);
        return $res;
    }

    echo ae("chaenichthys");
    echo "<br>";

    function ae2($word)
    {
        $result = str_replace("æ", "ae", $word);
        return $result;
    }

    echo ae2("chænichthys");
    echo "<br>";

    function notwaror($message, $class = "info")
    {
        return "<div class='$class'> $message.</div>";
    }

    echo notwaror("j'aime la tarte");
    echo "<br>";

    function randword()
    {
        $alphabet = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        ];

        $word1 = [];
        $word2 = [];

        $rand1 = rand(1, 5);

        for ($i = 0; $i < $rand1; $i++) {
            $rand2 = rand(0, 25);
            $word1[] = $alphabet[$rand2];
        }

        $rand3 = rand(7, 15);

        for ($i = 0; $i < $rand3; $i++) {
            $rand4 = rand(0, 25);
            $word2[] = $alphabet[$rand4];
        }

        $word2 = strtolower(implode('', $word2));
        $word1 = strtolower(implode('', $word1));

        return [$word1, $word2];
    }

    $res = randword();
    echo "Word 1: " . $res[0] . "<br>";
    echo "Word 2: " . $res[1] . "<br>";

    function volcone($ray, $heigth){
        $volume = pow($ray, 2)*M_PI*(1/3);
        echo "the volume of a cone wich ray is $ray and heigth is $heigth = $volume cm<sup>3</sup><br>";
    }

    volcone(5, 3);
    ?>

    <form method="post">
        <button type="submit">Generate</button>
    </form>

    <a href="../index.php">index</a>
</body>

</html>