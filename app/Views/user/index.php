<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
</head>

<body>

    <h1>Daftar Pengguna</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level User</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?= $user['id_user']; ?>
                </td>
                <td>
                    <?= $user['username']; ?>
                </td>
                <td>
                    <?= $user['password']; ?>
                </td>
                <td>
                    <?= $user['level_user']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>