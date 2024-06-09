<?php
    class myDBClass{
        public $severname;
        public $username;
        public $password;
        public $database;
        public $con;

        function __construct($sn, $urs, $pwd, $db)
        {
            $this->severname = $sn;
            $this->username = $urs;
            $this->password = $pwd;
            $this->database = $db;
        }

        function connectDB(){
            $this->con = mysqli_connect($this->severname, $this->username, $this->password, $this->database);
            if(!$this->con)
                die("Ket noi khong thanh cong".mysqli_connect_error());
            else echo("Ket noi thanh cong");
        }

        function runQuery($query){
            return mysqli_query($this->con, $query);
        }

        function closeConnection(){
            mysqli_close($this->con);
        }
    }
    $workDB = new myDBClass("localhost", "root", "", "MyDB");
    $workDB->connectDB();
    $query = 'SELECT * FROM SP';
    $result = $workDB->runQuery($query);
    $workDB->closeConnection();
?>
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
            <th>ma sp</th>
            <th>ten sp</th>
            <th>mo ta</th>
            <th>gia de xuat</th>
            <th>gia ban</th>
            <th>so luong</th>
            <th>tinh trang</th>
            <th>hinh anh</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row['masp']?></td>
            <td><?=$row['tensp']?></td>
            <td><?=$row['mota']?></td>
            <td><?=$row['giadx']?></td>
            <td><?=$row['giaban']?></td>
            <td><?=$row['sl']?></td>
            <td><?=$row['tt']?></td>
            <td><?=$row['hinh']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>