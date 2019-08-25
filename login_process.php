<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login_process</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg');
        }
    </style>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "admin" && $password = "password"){
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-success">
                    <strong>Login success!!! </strong> Congratulation you have done a great job.
                </div>
                <a href="login.php" class="btn btn-primary btn-block">Log Out</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <?php
        }else if(empty($username) || empty($password)){
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-danger">
                    <strong>Field cannot empty! </strong> you should fill all in the fiel.
                </div>
                <a href="login.php" class="btn btn-primary btn-block">Go Back</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <?php
        }else{
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-warning">
                    <strong>You don't have account yet!!!</strong> Please register.
                </div>
                <a href="register.php" class="btn btn-primary btn-block"> Register</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
}
?>
</body>

</html>