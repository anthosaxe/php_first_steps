<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill ternary</title>
</head>
<body>
    <form action="" method="get">
        <label for="type">Are you a human, a cat or a unicorn ?<br></label>
        <label for="type">
        <input type="radio" name="type" id="type" value="human"> human<br></label>
        <label for="type">
        <input type="radio" name="type" id="type" value="unicorn"> unicorn<br></label>
        <label for="type">
        <input type="radio" name="type" id="type" value="cat"> cat<br></label>
        <input type="submit" value="submit" id="submit">
    </form>
    <?php
        if (isset($_GET['type'])) {
            $type = htmlspecialchars($_GET['type']);
            $message = ($type === 'human') ? '<img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExajNjcWV3azZkamY2MGVvdXZ3NmNxNGNpNmZhNGUwMnl6cXo0ZnRhdyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/adg7CpC5U575yNPbOK/giphy.webp">' :
            $message = ($type === 'unicorn') ? '<img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExajgyOHZ3b2txYjc4MnpoNDljbWo1Z21xcGtuMHBseDBvaHV1Y3BuaCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/L2UdIWuCRbUL6/giphy.webp">' :
            $message = ($type === 'cat') ? '<img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExb2Y0cDg4NTdjaDg3bDY5dzIyYnVmMzMydjYzejlvajFzZG5vcHQwNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/lJNoBCvQYp7nq/giphy.webp">' : 'I don\'t know what you are...';


            echo ("$message");
        }
    ?>

    <a href="../index.php"><br>index</a>
</body>
</html>