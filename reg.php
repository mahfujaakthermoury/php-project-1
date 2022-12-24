<?php
include 'lib/db.php';
?>

<?php
if (isset($_POST['form_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";

    $status = $db->query($sql);

    if ($status) {
        echo   '<div class="container p-4 text-center">
                    <div class="alert alert-success" role="alert">
                       <h5>Registration successfully.</h5>
                    </div>
                </div>';
    } else {
        echo   '<div class="container p-4 text-center">
                    <div class="alert alert-success" role="alert">
                       <h5> Registration failed.</h5>
                    </div>
                </div>';
    }
    if($status){
        header('Location:index.php');
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" 
    href="https://uxwing.com/wp-content/themes/uxwing/download/web-app-development/online-form-icon.png" />
    <title>CRUD Aplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<section class="content-section py-5 text-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center "> Registration</h1>
                <br><br>
                <form action="reg.php" method="post">
                    <div class="md-3">
                        <label for="name" class="form-lavel">Name</label>

                        <input name="name" type="text" class="form-control" id="name" placeholder="Type name">
                    </div><br>

                    <div class="md-3">
                        <label for="email" class="form-lavel">Email</label>

                        <input name="email" type="email" class="form-control" id="price"
                            placeholder="Type email">
                    </div><br>

                    <div class="md-3">
                        <label for="password" class="form-lavel">Password</label>

                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Type password">
                    </div><br>

                    <div class="md-3">
                        <input type="submit" value="Registration" class="btn btn-primary" name="form_submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

