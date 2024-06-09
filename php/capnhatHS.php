<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // hien thi thong tin  *** NOTE ***
    // load du lieu doc tu chuoi querystring (capnhatHS.php?idhs = 1)
    $result = "";
    if(isset($_GET['idhs'])){
        $con = mysqli_connect("localhost","root","");
        if(!$con) die("error");

        mysqli_select_db($con,"qlhocsinh");
        mysqli_query($con, "SET NAMES 'UTF8'");
        $sql = 'SELECT * FROM hocsinh WHERE idhs = '.$_POST['idhs'];

        $result = mysqli_fetch_array(mysqli_query($con, $sql));
    }

    // cap nhat
        if(isset($_POST['capnhat'])){
            $con = mysqli_connect("localhost","root","");

            if(!$con) die("error");

            mysqli_select_db($con, "qlhocsinh");
            mysqli_query($con, "SET NAMES 'UTF8'");
            $sql = 
            'UPDATE hocsinh
            SET hoten = "'.$_POST['hoten'].'",
            gioitinh = '.$_POST['gioitinh'].',
            ngaysinh = "'.$_POST['ngaysinh'].'",
            diachi = "'.$_POST['diachi'].'",
            lophoc = "'.$_POST['lophoc'].'",
            diemtb = '.$_POST['diemtb'].'
            WHERE idhs = '.$_POST['idhs']; // *** NOTE ***

            if(!mysqli_query($con, $sql)) die("error");
            echo 'da cap nhat thanh cong';
            mysqli_close($con);
        }

        if($result == "") echo 'ko tim thay du lieu';
        else{
    ?>
    <form action="capnhatHS.php" method="post">
        <div>
            Ho ten: <input type="text" name="hoten" value="<?=$result['hoten']?>">
        </div>
        <div>
            Gioi tinh: 
            <input type="radio" name="gioitinh" value="1"
            <?php
                if($result['gioitinh'] == 1) echo 'checked'
            ?>
            > Nam
            <input type="radio" name="gioitinh" value="0"
            <?php
                if($result['gioitinh'] == 0) echo 'checked'
            ?>
            > Nu
        </div>
        <div>
            Ngay sinh: <input type="date" name="ngaysinh" value="<?=$result['ngaysinh']?>">
        </div>
        <div>
            Dia chi: <input type="text" name="diachi" value="<?$result['diachi']?>">
        </div>
        <div>
            Lop hoc: <input type="text" name="lophoc" value="<?=$result['lophoc']?>">
        </div>
        <div>
            Diem TB: <input type="text" name="diemtb" value="<?=$diemtb['diemtb']?>">
        </div>
        <input type="submit" name="capnhat" value="Cap nhat">
    </form>
    <?php
        }
    ?>
</body>
</html>