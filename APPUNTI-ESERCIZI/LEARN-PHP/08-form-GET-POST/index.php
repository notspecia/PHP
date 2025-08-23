<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta Data information of the HTML file -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GET/POST</title>
    <meta name="description" content="test of the method post / get">

</head>

<body>
    <!-- content start -->

    <form action="./esempio.php" method="get">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br> <br>
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" required>
        <br> <br>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>
        <br> <br>
        <input type="submit" value="Invia dati">
    </form>

    <!-- end content -->
</body>

</html>