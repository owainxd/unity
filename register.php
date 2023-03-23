<?php
require('menu.php');
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
        <div class="col-md-6 offset-md-3 mt-3 shadow-lg p-4 bg-body-tertiary rounded">
            <div class="text-center">
                <img src="images/register-removebg.png" width="80%">
            </div>
            <form action="register_controller.php"  method ="POST">
                <div class="row mb-3">
                    <label for="inputPseudo" class="col-sm-2 col-form-label">Pseudo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPseudo" required name="pseudo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" required name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" required name="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="country" class="col-sm-2 col-form-label">Country:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="country" name="country" required>
                            <option value="">Select a country</option>
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="Mexico">Mexico</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                            <option value="Spain">Spain</option>
                            <option value="Italy">Italy</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>