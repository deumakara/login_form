<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register_process</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/register.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(empty($username) || empty($password) || empty($email)){
        ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-danger">
                    <strong>Field cannot empty! </strong> you should fill all in the fiel.
                </div>
                <a href="register.php" class="btn btn-primary btn-block">Back to register</a>
            </div>
            <?php
        }else{
        ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="alert alert-success">
                            <strong>Register success!!! </strong> Congratulation you use this application.
                        </div>
                        <a href="login.php" class="btn btn-primary btn-block">Log Out</a>

                        <ul class="list-group" style="margin-top:100px;">

                            <li class="list-group-item">Username: <?php echo $username  ?> </li>
                            <li class="list-group-item">Password: <?php echo $password  ?> </li>
                            <li class="list-group-item">E-Mail: <?php echo $email  ?></li>
                            <li class="list-group-item">Message: <?php echo $message  ?> </li>
                        </ul>

                    </div>
                    <?php
        }
    ?>

                    <?php
    }
    ?>
</body>

</html>