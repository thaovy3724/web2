<?php
    require('myDBClass.php');
    function uploadFile($f){
        move_uploaded_file($f['tmp_name'],"uploads/".$f['name']);
    }

    if(isset($_POST['themsp'])){
       $themsp = new myDBClass("localhost", "root", "", "MyDB");
       $themsp->connectDB();
       $file = $_FILES['fHinh'];
       uploadFile($file);
       $path = "uploads/".$file['name'];
       $query = 
       'INSERT INTO SP(masp, tensp, mota, giadx, giaban, sl, tt, hinh)
       VALUES('.$_POST['iMasp'].', "'.$_POST['iTensp'].'", "'.$_POST['iMota'].'",'.$_POST['iGiadx'].','.$_POST['iGiaban'].','.$_POST['iSl'].','.$_POST['selTT'].', "'.$path.'")';
       $themsp->runQuery($query);
       $themsp->closeConnection();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            padding-left: 5px;
            padding-right: 5px;
            padding-bottom: 10px;
            border-collapse: collapse;
            background-color: gainsboro;
            color: darkblue;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<!-- •	$_FILES["file"]["name"] – tên của tập tin cần upload
•	$_FILES["file"]["type"] – loại tập tin cần upload
•	$_FILES["file"]["size"] – kích thước tập tin cần upload (tính bằng byte)
•	$_FILES["file"]["tmp_name"] – Tên tạm thời của tập tin khi được sao chép và lưu trữ lên server. 
•	$_FILES["file"]["error"] - mã lỗi kết quả trả về khi upload tập tin -->

    <form action="themsp.php" name="frmTHemSP" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ma san pham:</td>
                <td><input type="text" name="iMasp"></td>
            </tr>
            <tr>
                <td>ten san pham:</td>
                <td><input type="text" name="iTensp"></td>
            </tr>
            <tr>
                <td>mo ta san pham:</td>
                <td><input type="text" name="iMota"></td>
            </tr>
            <tr>
                <td>gia de xuat:</td>
                <td><input type="text" name="iGiadx"></td>
            </tr>
            <tr>
                <td>gia ban:</td>
                <td><input type="text" name="iGiaban"></td>
            </tr>
            <tr>
                <td>so luong ton kho:</td>
                <td><input type="text" name="iSl"></td>
            </tr>
            <tr>
                <td>tinh trang:</td>
                <td><select name="selTT">
                    <option value="0">an</option>
                    <option value="1">hien</option>
                </select></td>
            </tr>
            <tr>
                <td>hinh anh:</td>
                <td><input type="file" name="fHinh"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="themsp" value="Them san pham moi">
                    <input type="reset" name="xoaform" value="xoa form">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>