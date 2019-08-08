<?php
$serverName = "127.0.0.1";
$userName = "root";
$passwd = "123456";

try {
    $conn = new PDO("mysql:host=$serverName;",$userName,$passwd);
    echo "数据库连接成功";
    echo __DIR__;
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p></p>
</body>
</html>