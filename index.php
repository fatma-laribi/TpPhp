<?php
if (isset($_SESSION['user'])) {
    header('location:home.php');
}
$pageTitle = 'login';
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result ajout</title>
    <link rel="stylesheet" type="text/css" href="node_modules/bootswatch/dist/darkly/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php
    if (isset($_SESSION['errorMessage'])) {

        ?>
        <div class="alert alert-danger">
            <?= $_SESSION['errorMessage'] ?>
        </div>
        <?php
        unset($_SESSION['errorMessage']);
    }
    ?>
    <form action="processLogin.php" method="post">
        <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input
                    name="username"
                    type="text"
                    class="form-control"
                    id="exampleInputUsername"
                    placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input
                    name="pwd"
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
</html>

