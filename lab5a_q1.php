<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Your Name";
        $matricNumber = "Your Matric Number";
        $course = "Your Course";
        $year = "Your Year of Study";
        $address = "Your Address";
    ?>
    <table border="1">
        <tr>
            <th>Detail</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
