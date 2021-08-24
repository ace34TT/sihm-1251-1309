<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= site_url("admin/login") ?>" method="POST">
        <input type="text" name="nomUtilisateur"> <br>
        <input type="text" name="motDepasse"> <br>
        <input type="submit"> <br>
        <?= site_url(" user/products")  ?>
    </form>
</body>

</html>