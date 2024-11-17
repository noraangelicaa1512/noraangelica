<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hari Belajar PHP</title>
</head>

<body>
    <h1>Daftar Hari Belajar PHP</h1>
    <?php
    for ($i = 1; $i <= 1000; $i++) {
        echo "<p>$i. Ini adalah hari ke-$i belajar PHP</p>";
    }
    ?>
</body>

</html>