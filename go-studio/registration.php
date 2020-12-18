<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $subject = 'запись'ж
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $msg = клиент . $name .  '(' . $phone . ')' . 'записался на ' .$data; 
    mail('meleshin.r@yandex.ru', $subject, $msg);
    ?>
</body>
</html>