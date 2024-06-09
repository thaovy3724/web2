<?php
// students
    $students = array
    (
        array("Dammio",22,9),
        array("Lan",25,8),
        array("Vy",18,5),
        array("Hoa",17,10)
    );

    foreach($students as $item)
        echo $item[0].",".$item[1].",".$item[2]."<br>";

// diem thi
    $diemthi = array(
        "hoang"=>array(
            "monVatLy"=>7,
            "monToan"=>8,
            "monHoa"=>9,
        ),

        "minh"=>array(
            "monVatLy"=>7,
            "monToan"=>9,
            "monHoa"=>6,
        ),

        "huong"=>array(
            "monVatLy"=>8,
            "monToan"=>8,
            "monHoa"=>9,
        )
        );

    foreach($diemthi as $key=>$value){
        echo $key."=";
        foreach($value as $monthi=>$diem)
            echo $monthi.":".$diem.",";
        echo "<br>";
    }
?>