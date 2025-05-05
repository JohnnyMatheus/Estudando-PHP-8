<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="username">
            Usuario:
            <input type="text" name="username">
        </label><br>
        <label for="password">
            Senha:
            <input type="password" name="password">
        </label><br>
        <select name="tema">
            <option value="escuro">Escuro</option>
            <option value="claro">Claro</option>
        </select><br>
        <input type="submit" value="Login">
    </form>


</body>

</html>