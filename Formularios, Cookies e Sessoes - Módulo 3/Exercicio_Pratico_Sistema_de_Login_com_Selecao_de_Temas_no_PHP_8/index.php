<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="username">
            <input type="text" name="usuario">
        </label><br>
        <label for="password">
            <input type="password" name="password" >
        </label><br>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>