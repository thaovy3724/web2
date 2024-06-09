<?php
    if(isset($_POST['btn_suasp'])){
        $con = mysqli_connect("localhost","root","","qlbansach");
        $sql =
        'UPDATE sach
        SET tenSach = "'.$_POST['tensach'].'",
        giaban = '.$_POST['giaban'].',
        idNSX = '.$_POST['idNSX'].'
        WHERE idSach = '.$_POST['idSach'];
        if(!mysqli_query($con, $sql)){
            mysqli_close($con);
            die('error');
        } 
        else echo 'success';
        mysqli_close($con);
    }
?>