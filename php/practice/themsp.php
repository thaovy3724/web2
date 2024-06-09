<?php
    include 'myDBClass.php';
    function uploadHinh($file){
        move_uploaded_file($file['tmp_name'], '../uploads/'.$file['name']);
    }

    if(isset($_POST['themsp'])){
        $work = new myDBClass("localhost","root","","MyDB");
        $work->connectDB();
        $file = $_FILES['fHinh'];
        uploadHinh($file);
        $path = "uploads/".$file['name'];
        $query = 
        'INSERT INTO SP(masp, tensp, mota, giadx, giaban, sl, tt, hinh)
        VALUES('.$_POST['iMasp'].', "'.$_POST['iTensp'].'", "'.$_POST['iMota'].'",
        '.$_POST['iGiadx'].', '.$_POST['iGiaban'].', '.$_POST['iSl'].', '.$_POST['selTT'].',"'.$path.'")';
        $work->runQuery($query);
        $work->closeConnection();
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
            padding: 10px 5px;
            border-collapse: collapse;
            background-color: gainsboro;
            color: darkblue;
        }
        tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form name="frmThemSP" method="post" action="themsp.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Ma san pham:</td>
                <td><input type="text" name="iMasp"></td>
            </tr>
            <tr>
                <td>Ten san pham:</td>
                <td><input type="text" name="iTensp"></td>
            </tr>
            <tr>
                <td>Mo ta san pham:</td>
                <td><input type="text" name="iMota"></td>
            </tr>
            <tr>
                <td>Gia de xuat:</td>
                <td><input type="text" name="iGiadx"></td>
            </tr>
            <tr>
                <td>Gia ban:</td>
                <td><input type="text" name="iGiaban"></td>
            </tr>
            <tr>
                <td>So luong ton kho:</td>
                <td><input type="text" name="iSl"></td>
            </tr>
            <tr>
                <td>Tinh trang:</td>
                <td><select name="selTT">
                    <option value="0">an</option>
                    <option value="1">hien</option>
                </select></td>
            </tr>
            <tr>
                <td>Hinh anh:</td>
                <td><input type="file" name="fHinh"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="themsp" value="Them san pham moi">
                    <input type="reset" name="xoaform" value="Xoa form">
                </td>
            </tr>
        </table>
    </form>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>