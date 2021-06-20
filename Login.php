<!-- (PHP MySQL CRUD - Read Data Tutorial in Hindi / Urdu) https://www.youtube.com/watch?v=JtG3bb6scEE -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col-4"></div>
            <div class="text-center mt-4 col-4"><h1>Sign Up</h1></div>
            <div class="col-4"></div>
        </div>
        <div class="row bg-success justify-content-center">
            <div class="col-4 m-4">
                <form action="Registration.php" method="post">
                    <label for="firstname">First Name</label><br>
                    <input type="text" name="firstname" required><br>
                    <label for="firstname">Last Name</label><br>
                    <input type="text" name="lastname" required><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" required><br>
                    <label for="phone">PHone Number</label><br>
                    <input type="tel" id="phone" name="phone" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" required><br><br>
                    <input type="submit" name="create" id="submit">
                </form>
            </div>
        </div>
    </div>
    <script src='./js/bootstrap.min.js'></script>
    <script src="./js/jquery.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
</body>
</html>

