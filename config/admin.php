<?php
    // PHP code to display the Users section
    $usersPerPage = 5; // Number of users to display per page
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number

    // Fetch users from the database using your preferred method (e.g., database query)
    // Replace this code with your actual database fetching logic
    $totalUsers = 50; // Total number of users in the database
    $totalPages = ceil($totalUsers / $usersPerPage); // Calculate total pages

    // Simulated user data for demonstration purposes
    $users = [
        ['id' => 1, 'name' => 'John Doe'],
        ['id' => 2, 'name' => 'Jane Smith'],
        ['id' => 3, 'name' => 'Alice Johnson'],
        // ... Fetch more users from the database
    ];

    // Calculate start and end indices of users to display based on current page
    $startIndex = ($currentPage - 1) * $usersPerPage;
    $endIndex = min($startIndex + $usersPerPage - 1, $totalUsers - 1);

    // Display users in a table
    echo '<h2>Users</h2>';
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Action</th></tr>';
    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $user = $users[$i];
        echo '<tr>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['name'] . '</td>';
        echo '<td><form method="POST" action="index.php?page=' . $currentPage . '"><input type="hidden" name="delete_user_id" value="' . $user['id'] . '"><input class="delete-btn" type="submit" value="Delete"></form></td>';
        echo '</tr>';
    }
    echo '</table>';

    // Pagination links
    echo '<div class="pagination">';
    for ($page = 1; $page <= $totalPages; $page++) {
        echo '<a href="index.php?section=users&page=' . $page . '"' . ($page == $currentPage ? ' class="active"' : '') . '>' . $page . '</a>';
    }
    echo '</div>';

    // Handle user deletion
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user_id'])) {
        $deletedUserId = $_POST['delete_user_id'];
        // Code to delete the user from the database based on the provided ID
        // Add your own logic here to handle the deletion
        echo 'User with ID ' . $deletedUserId . ' has been deleted.';
    }
?>
