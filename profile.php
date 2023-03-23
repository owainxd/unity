<?php
include('session_player.php');
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

    <div class="container mt-4">

        <div class="card" style="width: 18rem;">
            <img src="images/player.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hello <?php echo $pseudo;?> </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: <?php echo $email;?></li>
                <li class="list-group-item">Country: <?php echo $country;?></li>
                <li class="list-group-item">Password: <?php echo $password;?></li>
            </ul>
        </div>
    </div>

</body>
</html>