<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario"><br>
        <label for="password">Senha:</label>
        <input type="password" name="password"><br>
        <label for="lembrar">Tema Preferido:</label>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select><br>
        <input type="submit" value="Login">
      

    </form>
</body>

</html>