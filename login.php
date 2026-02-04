<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
     <form action="login.php" method="post">
        <h2>Login </h2>
            <div class="form-group">
            <input type="text" name="email" required class="form-control" placeholder="Email"><br>
            </div>
        <div class="form-group">
            <input type="password" name="password" required class="form-control"  placeholder="Password"><br>
        </div>
        <div class="form-btn">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div><br>
    </form>
    <div class="sign-in-link">
            <a href="register.php" target="_self">Don't have an account? Sign Up.</a>
        </div>
   </div>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"];
    }
?>