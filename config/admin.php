<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "me-dawa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Edit User
if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $role = $_POST['role'];

    // Update the user record in the database
    $sql = "UPDATE users SET role='$role' WHERE username='$username'";
    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

// Delete User
if (isset($_POST['delete'])) {
    $username = $_POST['username'];

    // Delete the user record from the database
    $sql = "DELETE FROM users WHERE username='$username'";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

// Fetch Existing Users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Close the database connection
$conn->close();
?>
