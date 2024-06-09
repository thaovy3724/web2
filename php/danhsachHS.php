<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>MA HS</th>
            <th>HO TEN</th>
            <th>GIOI TINH</th>
            <th>NGAY SINH</th>
            <th>DIA CHI</th>
            <th>LOP HOC</th>
            <th>DIEM TB</th>
        </tr>
        <?php
            $con = mysqli_connect("localhost","root","");
            if(!$con) die("error");

            mysqli_select_db($con, "qlhocsinh");
            mysqli_query($con, "SET NAMES 'UTF8'");
            $sql = 'SELECT * FROM hocsinh';
            $result = mysqli_fetch_array(mysqli_query($con, $sql));
            foreach($result as $item){
        ?>
            <tr>
                <td>edit</td>
                <td>detail</td>
                <td><?=$item['idhs']?></td>
                <td><?=$item['hoten']?></td>
                <td>
                    <?php
                    if($item['gioitinh'] == 1) echo 'nam';
                    else echo 'nu';
                    ?>
                </td>
                <td><?=$ngaysinh?></td>
                <td><?=$diachi?></td>
                <td><?=$lophoc?></td>
                <td><?=$diemtb?></td>
            </tr>
        <?php
            }
            mysqli_close($con);
        ?>
    </table>
</body>
</html>