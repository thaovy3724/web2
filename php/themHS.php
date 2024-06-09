<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['them'])){
            $con = mysqli_connect("localhost","root",""); //sever, user, password

            // loi
            if(!$con) die('Could note connect');

            // query
            mysqli_select_db($con, "qlhocsinh");
            mysqli_query($con, "SET NAMES 'UTF8'");

            $sql = 
            'INSERT INTO hocsinh (hoten, gioitinh, ngaysinh, diachi, lophoc, diemtb) 
            VALUES ("'.$_POST['hoten'].'", '.$gioitinh.', "'.$_POST['ngaysinh'].'", "'.$_POST['diachi'].'", "'.$_POST['lophoc'].'", '.$_POST['diemtb'].')';

            if(!mysqli_query($con, $sql)) die("error");
            echo 'da them thanh cong';
            mysqli_close($con);
        }
    ?>
    <form action="themHS.php" method="post">
        <div class="item">
            Ho ten: 
            <input type="text" name="hoten">
        </div>
        <div class="item">
            Gioi tinh:
            <input type="radio" name="gioitinh" value="1" checked> Nam
            <input type="radio" name="gioitinh" value="0"> Nu
        </div>
        <div class="item">
            Ngay sinh:
            <input type="date" name="ngaysinh">
        </div>
        <div class="item">
            Dia chi
            <input type="text" name="diachi">
        </div>
        <div class="item">
            Lop hoc:
            <input type="text" name="lophoc">
        </div>
        <div class="item">
            Diem TB:
            <input type="text" name="diemtb">
        </div>
        <input type="submit" name="them" value="Them">
    </form>
</body>
</html>