<?php
    $keyword = $_GET["keyword"];
    $conn = mysql_connect("localhost:3306", "Tstd11", "h26s5qDY");
    if ($conn) {
        mysql_select_db("sec2_11");
        mysql_query("SET NAMES utf8");
    } 
    else {
        echo mysql_errno();
    }
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysql_query($sql);
?>
<table border="1">
    <?php while($row = mysql_fetch_array($objQuery)): ?>
    <tr>
    <td><a href="memberDetail.php?username=<?php echo $row["name"]?>"><?php echo $row["address"]?></a></td>
    <td><?php echo $row["email"]?></td>
    <td><img src="mphoto/<?php echo $row["username"] ?>.jpg" width="100"></td>
    </tr>
    <?php endwhile;?>
</table>