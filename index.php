<?php
$valid_username = "admin";
$valid_password = "password123"; // Plain password for comparison (remove this if using hashed passwords only)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];  // Capture the password input

    // Check if the username and password match
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }

    // If you want to use hashed passwords:
    $valid_password_hash = password_hash("password123", PASSWORD_DEFAULT);

    // Verify the password after hashing
    if (password_verify($password, $valid_password_hash)) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="index.php" method="POST">  <!-- Make sure the form submits to the correct file -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
