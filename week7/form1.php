<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <form action="html_safe.php" method="post">
        <label for="input">Enter something (including HTML tags):</label><br>
        <input type="text" id="input" name="input"><br><br>
        
        <label for="email">Enter your email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
