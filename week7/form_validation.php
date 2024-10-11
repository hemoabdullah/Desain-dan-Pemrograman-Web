<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h2>Form Input dengan Validasi</h2>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="email-error" style="color:red;"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color:red;"></span><br><br>
        
        <input type="button" value="Submit" id="submit-button"><br><br>
    </form>
    <div id="hasil"></div>
    <script>
        $(document).ready(function () {
            $("#submit-button").click(function () {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password harus lebih dari 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }
                if (valid) {
                    var formData = $("#myForm").serialize();
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>