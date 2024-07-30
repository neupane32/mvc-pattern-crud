<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <a href="/mvc_pattern_crud/?action=create">Create User</a>
    <hr>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td>
                        <a href="/mvc_pattern_crud/?action=edit&id=<?php echo $user['id']; ?>">Edit</a>
                        <a href="/mvc_pattern_crud/?action=delete&id=<?php echo $user['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
