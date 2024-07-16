<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill school</title>
</head>
<body>
    <form method="get">
        <label for="note">note : </label>
        <input type="text" id="note" name="note">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_GET['note'])){
        $note = htmlspecialchars($_GET['note']);
        $note = (int)$note;

        echo ("if/else : <br>");
        if($note<=4){
            echo("This work is really bad. What a dumb kid! <br>");
        } elseif (4<$note && $note<=9){
            echo ("This is not sufficient. More studying is required.<br>");
        } elseif ($note === 10){
            echo ("barely enough!<br>");
        } elseif (10<$note && $note<=14){
            echo ("Not bad!<br>");
        } elseif (14<$note && $note<=18){
            echo ("Bravo, bravissimo!<br>");
        } elseif ($note>18){
            echo ("Too good to be true : confront the cheater!<br>");
        }

        echo ("switch case : <br>");
        switch ($note) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "This work is really bad. What a dumb kid!<br>";
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo "This is not sufficient. More studying is required.<br>";
                break;
            case 10:
                echo "Barely enough!<br>";
                break;
            case 11:
            case 12:
            case 13:
            case 14:
                echo "Not bad!<br>";
                break;
            case 15:
            case 16:
            case 17:
            case 18:
                echo "Bravo, bravissimo!<br>";
                break;
            default:
                echo "Too good to be true: confront the cheater!<br>";
                break;
        }
    
    }
    ?><br>
    <a href="../index.php">index</a>
</body>
</html>