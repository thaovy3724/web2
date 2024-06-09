<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--kiem tra san pham co ton tai ko-->
    <?php
        $con = mysqli_connect("localhost","root","","qlbansach");
        $sql = 'SELECT * FROM sach WHERE idSach = '.$_GET['idSach'];
        $result = mysqli_query($con, $sql);
        if(mysqli_fetch_array($result) == null){
            echo 'san pham ko ton tai';
            header('location: homepage.html');
        }
    ?>
    <form action="xulysuasp.php" method="post">
        <input type="hidden" name="idSach" value="<?=$_GET['idSach']?>">
        <?php
            $sql = 'SELECT * FROM sach WHERE idSach = '.$_GET['idSach'];
            $result = mysqli_query($con, $sql);
            $sanpham = mysqli_fetch_array($result);
        ?>
        ten san pham: <input type="text" name="tensach" value="<?=$sanpham['tenSach']?>"><br>
        gia san pham: <input type="text" name="giaban" value="<?=$sanpham['giaban']?>"><br>
        nha san xuat:
        <select name="idNSX">
            <?php
                $sql = 'SELECT * FROM nhasanxuat';
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    extract($row);
                    ?>
                    <option value="<?=$idNSX?>"
                    <?php
                        if($idNSX == $row['idNSX']) echo 'selected';
                    ?>
                    ><?=$tenNSX?></option>
                    <?php
                }
            ?>
        </select><br>
        <input type="submit" name="btn_suasp" value="suasp">
    </form>
</body>
</html>