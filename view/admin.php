<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>

    <h2>Edit User</h2>
    <form action="admin.php" method="post" class="card-form">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <label for="adminFirstName">First Name:</label>
        <input type="text" id="adminFirstName" name="adminFirstName" required><br><br>
        <label for="adminLastName">Last Name:</label>
        <input type="text" id="adminLastName" name="adminLastName" required><br><br>
        <label for="adminEmail">Email:</label>
        <input type="email" id="adminEmail" name="adminEmail" required><br><br>
        <label for="adminPassword">Password:</label>
        <input type="password" id="adminPassword" name="adminPassword" required><br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="doctor">Doctor</option>
            <option value="patient">Patient</option>
            <option value="supervisor">Supervisor</option>
            <option value="pharmacy">Pharmacy</option>
        </select><br><br>
        <input type="submit" name="edit" value="Edit User">
    </form>

    <h2>Delete User</h2>
    <form action="admin.php" method="post" class="card-form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" name="delete" value="Delete User">
    </form>

    <h2>Existing Users</h2>
    <?php include 'admin.php'; ?>
    <?php if (!empty($users)): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['adminFirstName']; ?></td>
                    <td><?php echo $user['adminLastName']; ?></td>
                    <td><?php echo $user['adminEmail']; ?></td>
                    <td><?php echo $user['adminPassword']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>
</body>
</html>
