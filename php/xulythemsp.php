<?php
    if(isset($_POST['btn_themsp'])){
        $con = mysqli_connect("localhost","root","","qlbansach");
        // kiem tra san pham da ton tai --> trung tat ca
        $sql = 
        'SELECT * FROM sach
        WHERE tenSach = "'.$_POST['tensach'].'"
        AND giaban = '.$_POST['giaban'].'
        AND idNSX = '.$_POST['idNSX'].'';
        $result = mysqli_query($con, $sql);
        if(mysqli_fetch_array($result)) echo 'san pham da ton tai';
        else{
            $sql = 
            'INSERT INTO sach(tensach, idNSX, giaban)
            VALUES ("'.$_POST['tensach'].'",'.$_POST['idNSX'].','.$_POST['giaban'].')';
            if(!mysqli_query($con, $sql)){
                mysqli_close($con);
                die('error');
            }
            echo 'da them thanh cong';
        }
        mysqli_close($con);
    }
?>