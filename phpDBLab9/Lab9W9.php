<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "Username : " . $row ["username"] . "<br>";
echo "Password : " . $row ["password"] . "<br>";
echo "Name : " . $row ["name"] . "<br>";
echo "Address : " . $row ["address"] . "<br>";
echo "Mobile : " . $row ["mobile"] . "<br>";
echo "Email: " . $row ["email"] . "<br>";
echo "<a href='editform.php?username=" . $row ["username"] . "'>แก้ไข</a>";
echo "<hr>\n";
}
?>
</body>
</html>