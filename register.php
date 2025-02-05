<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Register</h1>
        <form action="POST" action="">
            <div class="input-group">
                 <i class="fa-solid fa-user"></i>
                 <input type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" required placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password" required placeholder="Password">
                <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="confirm_password" required placeholder="Confirm Password">
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
        <p class="or">
            ------or-----
        </p>
        <div class="icons">
                 <i class="fa-brands fa-facebook"></i>
                 <i class="fa-brands fa-google"></i>
        </div>
        <div class="link">
            <p>Already have Account</p>
        </div>
        <a href="index.php">Sign In</a>
    </div>
    <script src="script.js"></script>
</body>
</html>