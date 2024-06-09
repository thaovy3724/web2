<?php
    if(isset($_POST['btn_dangnhap'])){
        $con = mysqli_connect("localhost","root","","qlbansach");
        $sql = 
        'SELECT * FROM taikhoan 
        WHERE username = "'.$_POST['username'].'"
        AND matkhau = "'.$_POST['matkhau'].'"';
        $result = mysqli_query($con, $sql);
        if(mysqli_fetch_array($result) == null) echo 'fail';
        else echo 'success';
    }
?>