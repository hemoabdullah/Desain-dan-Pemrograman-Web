<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <script>
        function validateForm() {
            const username = document.forms["loginForm"]["username"].value;
            const password = document.forms["loginForm"]["password"].value;

            const validUsername = "Hammam";
            const validPassword = "123456";
            let message = "";

            if (username !== validUsername || password !== validPassword) {
                message = "Username or password is incorrect.";
                alert(message);
                return false; 
            }
            return true; 
        }
    </script>
</head>
<body>
    <div class="login-container">
        <div class="login-left"></div> 
        <div class="login-right">
            <div class="login-form">
                <div class="logo"></div> 
                <h2>WELCOME TO OUR HOTEL</h2> 
                <h3>Sign-in Page</h3> 
                <form name="loginForm" action="home.php" onsubmit="return validateForm()" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-blue">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
