<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Form Login</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <style>
      body {
         background-image: url('img/background.jpg');
      }
   </style>
</head>

<body>
   <div class="container mt-5">
      <div class="row">
         <div class="col-4"></div>
         <div class="col-4">
            <div class="card">
               <div class="card-header text-center h4 font-width-bold">Login Form</div>
               <div class="card-body">

                  <form action="login_process.php" method="POST">
                     <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Usernmae">
                     </div>
                     <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control"
                           placeholder="Password">
                     </div>
                     <button type="submit" name="submit" class="btn btn-primary">Login</button>
                     <a href="register.php" class="btn btn-danger float-right">Register</a>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-4"></div>
      </div>
   </div>
</body>

</html>