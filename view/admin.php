<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Static/admin.css">
</head>
<body>
    <div id="sidebar">
        <h2>Navigation</h2>
        <ul>
            <li><a href="?section=users">Users</a></li>
            <li><a href="?section=orders">Orders</a></li>
            <li><a href="?section=products">Products</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Welcome to the Admin Dashboard</h1>
        <?php
            include '../config/admin.php'; // Include the admin configuration file
            // Include the appropriate section file based on the selected section
            $section = isset($_GET['section']) ? $_GET['section'] : 'users';

            session_start(); // Start the session

            // Store the selected section in the session
            $_SESSION['section'] = $section;

            switch ($section) {
                case 'users':
                    include 'users.php';
                    break;
                case 'orders':
                    include 'orders.php';
                    break;
                case 'products':
                    include 'products.php';
                    break;
                default:
                    echo '<p>Invalid section selected.</p>';
                    break;
            }
        ?>
    </div>
</body>
</html>
