<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $family = ['Pierre', 'Isabelle', 'Aline', 'Mathieu'];
    print_r($family);
    echo "<br>";
    $reciepe = ['gras', 'sucre', 'sel'];
    print_r($reciepe);
    echo "<br>";
    $film = ['wow', 'marvel'];
    print_r($film[0]);
    echo "<br>";
    $me = ['firstname' => 'Anthony', 'lastname' => "d'haene", 'age' => 28, 'nationnality' => 'belgian'];
    print_r($me);
    echo "<br>";
    $me['hobbies'] = ['wow', 'lol', 'esport'];
    print_r($me['hobbies']);
    echo "<br>";
    array_push($me['hobbies'], 'taxidermy');
    print_r($me['hobbies']);
    echo "<br>";
    $web_dev = ['frontend' => [], 'backend' => []];
    array_push($web_dev['frontend'], 'xhtml');
    array_push($web_dev['backend'], 'ruby on rails');
    array_push($web_dev['frontend'], 'css');
    array_push($web_dev['backend'], 'flash');
    array_push($web_dev['frontend'], 'javascript');
    $web_dev['frontend'][0] = 'html';
    array_pop($web_dev['backend']);
    print_r($web_dev);
    echo "<br>";
    ?>

    <a href="../index.php">index</a>
</body>

</html>