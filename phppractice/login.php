<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container shadow-sm rounded border">
        <a href="index.php" class="back-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
        </a>
        <form action="login.php" method="post">
            <h2>Login </h2>
            <div class="form-group">
                <input type="text" name="umail" required class="form-control" placeholder="Email or Username"><br>
            </div>
            <div class="form-group">
                <input type="password" name="password" required class="form-control" placeholder="Password"><br>
            </div>
            <div class="form-btn">
                <input type="submit" name="submit" value="Login" class="btn btn-primary">
            </div><br>
        </form>
        <div class="sign-in-link">
            <a href="register.php" target="_self" class="text-center">Don't have an account? Sign Up.</a>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $umail = $_POST["umail"];
    $password = $_POST["password"];
}
?>