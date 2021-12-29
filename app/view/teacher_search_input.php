<?php
	require '../common/define.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Đăng ký</title>
	<link rel="stylesheet" href="../../web/css/regist.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

		<div class='container boder-body'>
			<form name='formSignUp' action="do_regist.php" method="post" id="addform" >
				<div class='formadd'>
					<div class='subformadd'>
							<div class='lable-input color-lable'>
								<div>Bộ Môn</div>
							</div>
							<div class='lable-input'>
							<select name='teacherSpecialized' id='idSpecialized'>
									<option></option>
									<?php foreach ($listSpecialized as $key => $specialized) : ?>
									<option>
										<?php echo $specialized; ?>
									</option>
									<?php endforeach; ?>
							</select>
							</div>	
					</div>
					<div class='subformadd'>
						<div class='lable-input color-lable'>
								<div>Từ khóa</div>
						</div>
						<div class='lable-input'>
								<input type='text' name='filter'>
						</div>
					</div>
					<div>
						<button id="submit-btn" type="submit">Tìm kiếm</button>
					</div>
				</div>
			</form>
			<div class="show-table col-md-12">
        <table id="value-table">
		<tr class="header">
			<th style="width:20%;">ID</th>
			<th style="width:20%;">Username</th>
			<th style="width:60%;">Tên hiển thị</th>
		</tr>
			<tr>
				<td><label>id</label></td>
				<td><label>user</label></td>
				<td><label>name</label></td>
			</tr>
		</table>


		</div>

		<script type="text/javascript" src="JS/regist.js"></script>	
</body>
</html>