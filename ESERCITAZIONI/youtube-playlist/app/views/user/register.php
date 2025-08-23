<!DOCTYPE html>
<html>

<head>
    <title>Registrazione</title>
</head>

<body>
    <h2>Registrazione</h2>

    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="/register">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Registrati</button>
    </form>

    <p>Hai già un account? <a href="/login">Login qui</a></p>
</body>

</html>