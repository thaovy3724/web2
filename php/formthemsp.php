<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xulythemsp.php" method="post">
        ten san pham: <input type="text" name="tensach"><br>
        gia san pham: <input type="number" name="giaban"><br>
        nha san xuat: 
        <select name="idNSX">
            <?php
                $con = mysqli_connect("localhost","root","","qlbansach");
                $sql = 'SELECT * FROM nhasanxuat';
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value="<?=$row['idNSX']?>"><?=$row['tenNSX']?></option>
                    <?php
                }
            ?>
        </select><br>
        <input type="submit" name="btn_themsp" value="themsp">
    </form>
</body>
</html>