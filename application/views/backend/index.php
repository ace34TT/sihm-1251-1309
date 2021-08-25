<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body>
    <form action="<?= site_url("admin/login") ?>" method="POST">
        <input type="text" name="nomUtilisateur" value="root"> <br>
        <input type="password" name="motDepasse" value="root"> <br>
        <input type="submit"> <br>
    </form>
</body>

</html>