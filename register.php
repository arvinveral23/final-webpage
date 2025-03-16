<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    // Retrieve form inputs
    $fullName = $_POST['fullname'];
    $userName = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if email or username already exists in the "users" table
    $checkQuery = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $email, $userName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
                alert('Email or Username already exists!');
                window.location.href='register.html';
              </script>";
    } else {
        // Insert new user into the "users" table
        $insertQuery = "INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssss", $fullName, $userName, $email, $password);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Registration successful! Please log in.');
                    window.location.href='index.php';
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    $stmt->close();
}
$conn->close();
?>
