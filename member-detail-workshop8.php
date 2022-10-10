<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>
    <head><meta charset="utf-8"></head>
    <body style="padding:10px; line-height: 30px;">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        $value = $_GET["username"];
        $stmt->bindParam(1, $value); 
        $stmt->execute();
        $row = $stmt->fetch();?>
        <h1>รายละเอียดสมาชิก</h1>
        Username : <?=$row["username"]?><br>
        Password : <?=$row["password"]?><br>
        ชื่อ : <?=$row["name"]?><br>
        ที่อยู่ : <br><?=$row["address"]?><br>
        เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
        อีเมล: <?=$row["email"]?>
    </body>
</html>