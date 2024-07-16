<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_types</title>
</head>

<body>
    <?php
    $first_name = "Anthony";
    $last_name = "D'haene";
    echo ("<p>mon nom est : $first_name $last_name</p>");
    $age = 28;
    echo ("<p>mon age est : $age</p>");
    $eye_color = "arc-en-ciel";
    echo ("<p>les noeuils $eye_color</p>");
    $family = array('Pierre', 'Isabelle', 'Mathieu', 'Aline');
    echo ("les membres de ma familles sont :<br><ul>");
    foreach ($family as $member) {
        echo ("<li>$member</li>");
    }
    echo ("</ul>");
    ?>
    <a href="../index.php">index</a>
</body>

</html>