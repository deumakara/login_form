<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Register</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <style>
      body {
         background-image: url('img/register.jpg');
         background-size: cover;
      }
   </style>
</head>

<body>
   <div class="container mt-5">
      <div class="row">
         <div class="col-4"></div>
         <div class="col-4">
            <div class="card">
               <div class="card-header text-center h4 font-width-bold">Register Form</div>
               <div class="card-body">

                  <form action="register_process.php" method="POST">
                     <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Usernmae">
                     </div>
                     <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control"
                           placeholder="Password">
                     </div>
                     <div class="form-group">
                        <label for="email">E-Mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail">
                        <div class="form-group">
                           <label for="message">Message:</label>
                           <textarea name="message" id="message" cols="30" rows="2.5" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        <a href="login.php" class="btn btn-danger float-right">Back to login</a>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-4"></div>
      </div>
   </div>
</body>

</html>