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
     <form action="register.php" method="post">
        <h2>Sign Up </h2>
        <div class="form-group">
            <input type="text" name="fname" required class="form-control" placeholder="First Name"><br>
        </div>
            <div class="form-group">
            <input type="text" name="lname" required class="form-control" placeholder="Last Name"><br>
            </div>
            <div class="form-group">
            <input type="text" name="email" required class="form-control" placeholder="Email"><br>
            </div>
            <div class="form-group">
            <input type="text" name="username" required class="form-control" placeholder="Username"><br>
            </div>
            <div class="form-group">
            <input type="number" name="age" required class="form-control" placeholder="Age"><br>
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <select name="gender" aria-placeholder="Gender">
                    <option>None</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div><br>
        <div class="form-group">
            <input type="password" name="password" required class="form-control"  placeholder="Password"><br>
        </div>
        <div class="form-btn">
            <input type="submit" name="submit" value="Register" class="btn btn-primary">
        </div><br>
    </form>
    <div class="sign-in-link">
            <a href="login.php" target="_self">Already have an account? Sign In.</a>
        </div>
   </div>
</body>
</html>
<?php

    if(isset($_POST["submit"])){
        $fname = filter_input(INPUT_POST,"fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST,"lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT,FILTER_VALIDATE_INT);
        $gender = $_POST["gender"];
        $password = $_POST["password"];

        $hash = password_hash($password,PASSWORD_DEFAULT);

        if(empty($age)){
            echo "<div class='alert alert-danger>'Please enter a valid age!</div>";
            exit();
        }
        if(empty($email)){
            echo "<div class='alert alert-danger'>Please enter a valid email!</div>";
            exit();
        }
        if(strlen($password) < 8){
            echo "<div class='alert alert-danger'>Password must be at least 8 characters long!</div>";
            exit();
        }

        $sql = "INSERT INTO user (fname, lname, email, username, age, gender, password) 
                VALUES('$fname','$lname','$email','$username','$age','$gender','$hash')";

        try{
            mysqli_query($conn, $sql);
            echo "User is registered successfully!";
        }
        catch(mysqli_sql_exception){
            echo "Could not register user";
        }
    }
?>

