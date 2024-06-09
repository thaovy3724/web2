<?php
    if(isset($_POST['btn_dangky'])){
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con, "qlbansach");
        // kiem tra tai khoan da ton tai chua --> trung email
        $sql = 'SELECT * FROM taikhoan WHERE email = "'.$_POST['email'].'"';
        $result = mysqli_query($con, $sql);
        if(mysqli_fetch_array($result)!=null) echo 'tai khoan da ton tai';
        else{
        $sql = 
        'INSERT INTO taikhoan(username, matkhau, email, dienthoai) 
        VALUES ("'.$_POST['username'].'", "'.$_POST['matkhau'].'", "'.$_POST['email'].'", "'.$_POST['dienthoai'].'")';
        if(!mysqli_query($con, $sql)) {
            mysqli_close($con);
            die('error');
        }
        echo 'dang ki thanh cong';
        mysqli_close($con);
        }
    }
?>