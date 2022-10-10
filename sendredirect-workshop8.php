<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["usn"]);
    $stmt->bindParam(2, $_POST["pwd"]);
    $stmt->bindParam(3, $_POST["name"]);
    $stmt->bindParam(4, $_POST["address"]);
    $stmt->bindParam(5, $_POST["tel"]);
    $stmt->bindParam(6, $_POST["mail"]);
    $stmt->execute();
    $pid = $pdo->lastInsertId();
    header("location: member-detail-workshop8.php?username=" . $_POST["usn"]);
?>