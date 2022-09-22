<?php
require_once "../item/card/card.php"

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/item/card/card.css">

    <title>Mon portofolio</title>
</head>
<body>

<?php
echo card("/media/screenshotmeteo.jpg","App méteo","Javascript html/css api","hello world");
echo card("/media/screenshotmeteo.jpg","App méteo","Javascript html/css api","hello world");
echo card("/media/screenshotmeteo.jpg","App méteo","Javascript html/css api","hello world");

?>








<script src="/item/card/card.js"></script>
</body>
</html>
