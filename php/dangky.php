<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xulydangky.php" method="post" onsubmit="return checkForm(this)">
        <h2>Registration</h2>
        <div class="container">
            <div>
                <div class="item">
                    <label for="hoten">Ho va ten:</label>
                    <input type="text" name="hoten" placeholder="Nhap ho ten day du">
                </div>
                <div class="item">
                    <label for="diachi">Dia chi:</label>
                    <input type="text" name="diachi" placeholder="Nhap dia chi dang cu tru">
                </div>
                <div class="item">
                    <label for="email">Gmail</label>
                    <input type="text" name="email" placeholder="Nhap dia chi gmail">
                </div>
                <div class="item">
                    <label for="dienthoai">So dien thoai:</label>
                    <input type="text" name="dienthoai" placeholder="Nhap so dien thoai">
                </div>
            </div>
            <div>
                <div class="item">
                    <label for="tendangnhap">Ten dang nhap:</label>
                    <input type="text" name="tendangnhap" placeholder="Nhap ten dang nhap">
                </div>
                <div class="item">
                    <label for="matkhau1">Mat khau</label>
                    <input type="password" name="matkhau1" placeholder="Nhap mat khau">
                </div>
                <div class="item">
                    <label for="matkhau2">Xac nhan mat khau</label>
                    <input type="password" name="matkhau2" placeholder="Nhap lai mat khau">
                </div>
            </div>
            <div id="note"></div>
        </div>
        <input type="submit" name="dangky" value="Dang ky">
    </form>
    <script>
        function checkForm(form){
            var hoten = form.hoten.value;
            var diachi = form.diachi.value;
            var email = form.email.value;
            var dienthoai = form.dienthoai.value;
            var tendangnhap = form.tendangnhap.value;
            var matkhau1 = form.matkhau1.value;
            var matkhau2 = form.matkhau2.value;
            var note = document.getElementById("note");
            var re ;
            // du thong tin
            if(hoten == "" || diachi == "" || email == "" || dienthoai == "" || tendangnhap == "" || matkhau1 == "" || matkhau2 == ""){
                note.innerHTML="chua nhap du thong tin";
                return false;
            }

            // ten dang nhap
            re = /^(KH)\d{3}/;
            if(!re.test(tendangnhap)){
                note.innerHTML="ten dang nhap bat dau la KH tiep theo la 3 ky tu so";
                return false;
            }

            // email
/*
\S: Matches any non-whitespace character.
+: Matches one or more of the preceding token (in this case, non-whitespace characters).
@: Matches the literal "@" character.
\S+\.\S+: Matches one or more non-whitespace characters, followed by a literal ".", 
followed by one or more non-whitespace characters.
*/

            re = /\S+@\S+\.\S+/;
            if(!re.test(email)){
                note.innerHTML="sai dinh dang email";
                return false;
            }

            // dien thoai
            re = /^0\d{8,9}/;
            if(!re.test(dienthoai)){
                note.innerHTML="sai dinh dang so dien thoai";
                return false;
            }

            // mat khau
            if(matkhau1 != matkhau2){
                note.innerHTML = "mat khau nhap lai chua trung khop";
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>