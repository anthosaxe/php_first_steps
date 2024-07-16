<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill soccer</title>
</head>
<body>
    <?php
        if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])){
            $age = htmlspecialchars($_GET['age']);
            $gender = htmlspecialchars($_GET['gender']);
            $name = htmlspecialchars($_GET['name']);
            echo ($age>=21 && $age<=40 && $gender === "female") ? "Welcome to the team $name !" : "Sorry $name, you do not meet the requirements !";
        }
    ?>
    <form method="get">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required><br>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age" required><br>
        <label>gender : </label><br>
        <label for="gender"><input type="radio" name="gender" value="female" required>female<br></label>
        <label for="gender"><input type="radio" name="gender" value="male" required>male<br></label>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="../index.php">index</a>
</body>
</html>