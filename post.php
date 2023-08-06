<?php
require 'config.php';

$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $content = $row['content'];
} else {
    $content = 'Контент відсутній';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>About everyone</title>
</head>
<body>
    <div class="wrapper1">
        <div class="container">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>
