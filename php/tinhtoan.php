<!DOCTYPE html>
<html>
    <body>
        <?php
        $a = "";
        $b = "";
        if(isset($_POST['tinhtong'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $tong = $a + $b;
        }
        ?>
        <form action="tinhtoan.php" method="post">
            <label for="a">a:</label><input type="text" name="a" value="<?=$a?>"><br>
            <label for="b">b:</label><input type="text" name="b" value="<?=$b?>"><br>
            <input type="submit" name="tinhtong" value="tinhtong">
        </form>
        <?php
            if(isset($_POST['tinhtong']))
        echo '<label for="ketqua">Ket qua:</label><input type="text" name="ketqua" value="'.$_POST['a']+$_POST['b'].'">'
        ?>
    </body>
</html>