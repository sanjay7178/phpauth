<?php
if (!isset($_COOKIE['abc'])) {
    setcookie("abc" ,1 ,time() +240, "/");
}
$success = false;
$failure = false;
// $abc ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $exists = false;
    if (($password == $cpassword && $exists == false)) {
        if (!empty($username) && !empty($password)) {
            $sql = "INSERT INTO `users` (`sno`, `username`, `password`, `dt`,`email`) VALUES (NULL,'$username', '$password', current_timestamp(), '$email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = true;
            }
        }else {
            $failure ="Username and passwords are Empty";
        }
    } else {
        $failure = "Passwords Doesn't Match";
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <?php require 'partials/_nav1.php' ?>
    <?php
    if ($failure) {
        if ($failure != "Success your account has been created") {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>' . $failure . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        }
    }
    // }
    //else{
    //         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success your account has been created</strong>
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div>';
    //     }
    // }
    if ($success) {
        if ($_COOKIE['abc'] == '1') {
            unset($_COOKIE['abc']);
            setcookie("abc" ,2 ,time() +240, "/");
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Passsword format is incorrect please update your password with alphanumeric and charcters</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        elseif ($_COOKIE['abc'] == '2') {
            unset($_COOKIE['abc']);
            setcookie("abc" ,3 ,time() +240, "/");
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password length is insufficient (should of consists of minimum eigth charcters)</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }elseif ($_COOKIE['abc'] == '3') {
            unset($_COOKIE['abc']);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success your account has been created</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
        // var_dump($_COOKIE['abc']);
    }
    ?>
    <div class="container my-4">
        <h3 class="text-center">Signup to our Website</h3>
        <!-- sign up form -->
        <form action="/loginsystem/signup.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="uname">username</label>
                <input type="text" name="username" id="username" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="cpassword">confirm password</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="confirm password">
                <small id="emailHelp" class="form-text text-muted">confirm your password carefully</small>
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>