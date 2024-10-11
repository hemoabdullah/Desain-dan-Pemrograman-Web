<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
    $input = $_POST['input'];
    

    echo "Input yang disaring : " . $input . "<br><br>";

    if (isset($_POST['email'])) {
        $email = $_POST['email'];  
        echo "Email yang dimasukkan : " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Email yang dimasukkan tidak valid.";
    }
} else {
    echo "Harap berikan input yang valid.<br><br>";
}
?>
