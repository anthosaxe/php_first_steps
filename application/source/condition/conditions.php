<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>

<body>
    <?php
    $temperature = 1;

    if( $temperature >= 15 ) {
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
      } else {
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
      }
      
      if ($should_i_wear_a_scarf == true){
          echo("<p>wear a scarf</p>");
      }
      else{
        echo("<p>don't wear a scarf</p>");
      }
    ?>
    <a href="../index.php">index</a>
</body>

</html>