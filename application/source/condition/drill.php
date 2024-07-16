<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drill</title>
</head>

<body>
    <?php
    if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
        $age = htmlspecialchars($_GET['age']);
        $gender = htmlspecialchars($_GET['gender']);
        $language = htmlspecialchars($_GET['language']);
        if (is_numeric($age)) {
            $age = (int)$age;
            if ($language === "yes") {
                if ($gender === "male") {
                    if ($age <= 12) {
                        echo "Hello male kiddo!";
                    } elseif ($age <= 18 && $age > 12) {
                        echo "Hello male teenager!";
                    } elseif ($age < 115 && $age > 18) {
                        echo "Hello adult male!";
                    } elseif ($age >= 115) {
                        echo "Hello dark mage of the old times!";
                    }
                } else {
                    if ($age <= 12) {
                        echo "Hello female kiddo!";
                    } elseif ($age <= 18 && $age > 12) {
                        echo "Hello female teenager!";
                    } elseif ($age < 115 && $age > 18) {
                        echo "Hello female adult!";
                    } elseif ($age >= 115) {
                        echo "Hello dark sorceress of the old times!";
                    }
                }
            }
            else{
                if ($gender === "male") {
                    if ($age <= 12) {
                        echo "Aloha male kiddo!";
                    } elseif ($age <= 18 && $age > 12) {
                        echo "Aloha male teenager!";
                    } elseif ($age < 115 && $age > 18) {
                        echo "Aloha adult male!";
                    } elseif ($age >= 115) {
                        echo "Aloha dark mage of the old times!";
                    }
                } else {
                    if ($age <= 12) {
                        echo "Aloha female kiddo!";
                    } elseif ($age <= 18 && $age > 12) {
                        echo "Aloha female teenager!";
                    } elseif ($age < 115 && $age > 18) {
                        echo "Aloha female adult!";
                    } elseif ($age >= 115) {
                        echo "Aloha dark sorceress of the old times!";
                    }
                }
            }
        }
    }

    if (isset($_GET['gender'])) {
        $gender = htmlspecialchars($_GET['gender']);
    }
    ?>
    <form method="get" action="">
        <label for="age">geux, ton age!</label>
        <input type="text" id="age" name="age" required>
        <br>
        <label>
            <input type="radio" name="gender" value="male" checked>Male</label>
        <br>
        <label>
            <input type="radio" name="gender" value="female">Female</label>
        <br>
        <label>
            <input type="radio" name="language" value="yes">Check if you speak english</label>
        <br>
        <input type="submit" name="submit" value="Greet me now">
    </form>
    <a href="../index.php">index</a>
</body>

</html>