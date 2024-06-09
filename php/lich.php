<?php
	$thangHT = (int)date('m');
	$namHT = (int)date('Y');

function hienThiThangNam($thangHT, $namHT) {
	$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	
	return $months[$thangHT-1] . ' ' . $namHT;
}	

function hienThiLich($thangHT, $namHT) {
	$timestamp = strtotime($namHT.'-'.$thangHT.'-01');
	$firstDay = date('Y-m-d', $timestamp);
	$dayInWeekOfFirstDay = date('w', strtotime($firstDay));
	$cotBatDau = $dayInWeekOfFirstDay-1;
	if($dayInWeekOfFirstDay == 0) $cotBatDau =6;
	$soNgayTrongThang = date('t', $timestamp);

	$dem = 0;
	$s = '';
	do {
		$s .= '<tr>';
		for($j = 0; $j <=6; $j++) {
			$tmp = '';
			if($dem == 0) {
				if($j == $cotBatDau) {
					$dem++;
					$tmp = $dem . '';			
				}
			}
			else {
				if($dem < $soNgayTrongThang) {
					$dem++;
					$tmp = $dem . '';
				}
			}
			$style = ' style="text-align:center;"';
			if($dem == ((int)date('d')) && 
				$thangHT == ((int)date('m')) &&
				$namHT == ((int)date('Y'))) {
				$style = ' style="text-align:center; color:red;"';
			}
			$s .= '<td' . $style . '>' . $tmp . '</td>';
		}
		$s .= '</tr>';
	}
	while($dem < $soNgayTrongThang);
		
	return $s;
}

	if(isset($_POST['thangtruoc'])){
		$thangHT = $_POST['thangHT'];
		$namHT = $_POST['namHT'];
		$thangHT--;
		if($thangHT < 1) {
			$thangHT = 11;
			$namHT--;
		}
	}

	if(isset($_POST['thangsau'])){
		$thangHT = $_POST['thangHT'];
		$namHT = $_POST['namHT'];
		$thangHT++;
		if($thangHT > 12) {
			$thangHT = 1;
			$namHT++;
		}
	}
?>
	<form action="lich.php" method="post">
	<table border="1" cellpadding="1" cellspacing="1">
		<input type="hidden" name="thangHT" value="<?=$thangHT?>">
		<input type="hidden" name="namHT" value="<?=$namHT?>">
	<thead>
		<tr>
			<th scope="col"><button type="submit" name="thangtruoc">&lt;</button></th>
			<th colspan="5" rowspan="1" scope="col" id="idThangNam">
			<?= hienThiThangNam($thangHT, $namHT) ?>
			</th>
			<th scope="col"><button type="submit" name="thangsau">&gt;</button></th>
		</tr>
		<tr>
			<td>Thứ Hai</td>
			<td>Thứ Ba</td>
			<td>Thứ Tư</td>
			<td>Thứ Năm</td>
			<td>Thứ Sáu</td>
			<td>Thứ Bảy</td>
			<td>Chủ nhật</td>
		</tr>
	</thead>
	<tbody id="idLich">
	<?= hienThiLich($thangHT, $namHT)?>
	</tbody>
</table> 
</form>







