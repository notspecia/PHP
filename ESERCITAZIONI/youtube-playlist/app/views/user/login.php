<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="/login">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form>

    <p>Non hai un account? <a href="/register">Registrati qui</a></p>
</body>

</html>