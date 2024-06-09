<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVICE['PHP_SELF']?>" method="post">
        <input type="text" placeholder="nhap ten" name="ten">
        <input type="text" placeholder="nhap tuoi" name="tuoi">
        <input type="submit" name="dangki" value="dang ki">
    </form>
    <?php
        if(isset($_POST['dangki']) && $_POST['dangki']){ //ten bien(nut) nay co ton hay khong va nut nay co duoc click hay khong
            //1 button dung (true) == button da click roi
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            echo $ten,$tuoi,"tuoi";
        }
    ?>
</body>
</html>