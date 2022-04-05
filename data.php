<?php

session_start();

include "connection.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <tableborder = 1 cellspacing = 0 cellpadding = 10>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Image</td>
        </tr>
        <?php
        $i=1;
        $rows = mysqli_query($con, "SELECT * FROM upload ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row) : ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td> <img src="img/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>"></td>
        </tr>
        <?php endforeach; ?>
        </table>
        <br>
        <a href="../uploadimagefile">Upload Image File</a>
</body>
</html>