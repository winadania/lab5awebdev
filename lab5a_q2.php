<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $students = [
            "John Doe" => 22,
            "Jane Smith" => 20,
            "Alex Johnson" => 21,
            "Emily Davis" => 23
        ];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $name => $age): ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $age; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
