<?php
session_start();
include 'connect.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim the input to remove extra spaces and allow login via username or email
    $username_or_email = trim($_POST['username']);
    $password = $_POST['password'];

    // Prepare a statement to query the database for a matching username or email
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the entered password against the stored password (plain text comparison)
        if ($password === $row['password']) {
            // Credentials are valid; start the session and set session variables
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php"); // Redirect to homepage upon successful login
            exit();
        } else {
            echo "<script>
                    alert('Invalid Password!');
                    window.location.href='index.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Invalid Username or Email!');
                window.location.href='index.php';
              </script>";
    }
    $stmt->close();
}

$conn->close();
?>
