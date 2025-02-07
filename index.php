<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Login  page</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Sign In</h1>
        <form action="user-account.php" method="POST">
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" required placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password" required placeholder="Password">
                <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signin">
        </form>
            <p class="or">
                ------or------
            </p>
            <div class="icons">
                 <i class="fa-brands fa-facebook"></i>
                 <i class="fa-brands fa-google"></i>
            </div>
            <br>
            <div class="link">
                <p>Don't have Account yet?</p>
                <a href="register.php">Sign Up</a>
            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>