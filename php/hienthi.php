<?php
    require 'myDBClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $workDB = new myDBClass('localhost','root','','MyDB');
        $workDB->connectDB();
        $query = 'SELECT * FROM SP';
        $result = $workDB->runQuery($query);
    ?>
    <table>
        <tr>
            <th>ma san pham</th>
            <th>ten san pham</th>
            <th>mo ta</th>
            <th>gia de xuat</th>
            <th>gia ban</th>
            <th>so luong ton</th>
            <th>tinh trang</th>
            <th>hinh anh</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row['masp']?></td>
            <td><?=$row['tensp']?></td>
            <td><?=$row['mota']?></td>
            <td><?=$row['giadx']?></td>
            <td><?=$row['giaban']?></td>
            <td><?=$row['sl']?></td>
            <td><?=$row['tt']?></td>
            <td><?=$row['hinh']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>