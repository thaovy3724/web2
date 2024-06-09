<?php
class myDBClass{
    public $servername;
    public $username;
    public $password;
    public $database;
    public $con;

    function __construct($sn, $urs, $pwd, $db)
    {
        $this->servername = $sn;
        $this->username = $urs;
        $this->password = $pwd;
        $this->database = $db;
    }

    function connectDB(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if(!$this->con)
            die('Kết nối không thành công'.mysqli_connect_error());
        else echo 'Ket noi thanh cong';
    }

    function runQuery($query){
        return mysqli_query($this->con, $query);
    }

    function closeConnection(){
        mysqli_close($this->con);
    }
}
?>