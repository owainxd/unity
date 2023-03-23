<?php
require('menu.php');
include('variables.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-md-6 offset-md-3 mt-5 shadow-lg p-5 bg-body-tertiary rounded">
            <div class="text-center">
                <img src="images/login_cover.png" width="50%">
            </div>
            <?php if($error):?>
                <div class="alert alert-danger text-center">
                    <?= $error ?>       
                </div>
            <?php endif ?>

            <form action="connexion_controller.php" method="POST">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Pseudo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required name="pseudo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" required name="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <button type="submit" class="btn btn-success">Sign in </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>