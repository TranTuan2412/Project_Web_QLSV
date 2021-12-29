<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/teacher/teacher_search.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Tìm kiếm phòng học</title>
</head>
<body>
    <?php
        require '../controller/teacher_search.php';
        require '../common/define.php';
       
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formsearch' action='../controller/classroom_search.php' method='GETs'>
                <div class="col-md-12 filterbuilding">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Bộ Môn</div>
                    </div>
                    <div class="col-sm-6">
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
                <div class="col-md-12 seacrch">
                    <div class="col-md-2"></div>
                        <div class="col-sm-2">
                            <div class="word">Từ Khóa</div>
                        </div>
                        <div class="col-sm-6">
                            <label for="" style='width:100%'>
                                <input type="text" class="filter" id="filter" name="filter">
                            </label>
                        </div>
                </div>
                <div class="col-md-12" style='text-align: center;margin-top:20px'>
                        <button  type="button" class="filtervalue"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>
			<?php count=0; ?>
			<?php foreach ($teachers as $teacher) : ?>
				<?php count++; ?>
			<?php endforeach; ?>
			<div class="count_teacher">
            	<p>Số giáo viên tìm thấy: <?php echo $count ?></p>
        	</div>				
            <div class="col-md-12">
                <table id="admin">
                    <tr class="header">
                        <th style="width:5%;">No
                        </th>
                        <th style="width:20%;">Tên giáo viên
                        </th>
                        <th style="width:10%;">Khoa
                        </th>
                        <th style="width:40%;">Mô tả chi tiết
                        </th>
                        <th style="width:20%;"> Action
                        </th>
                    </tr>
                    <?php foreach ($teachers as $teacher) : ?>
                        <tr>
                            <form action="../controller/teacher_search.php" 
                                  method='POST'>
                                <td>
                                    <?php echo $teacher['id']?>
                                    <input type="hidden" 
                                           name='id' 
                                           value='<?php echo $teacher['id']?>' >
                                </td>
                                <td>
                                    <?php echo $teacher['name']?>
                                </td>
                                <td>
                                    <?php foreach ($listDegree as $key=>$degree) : ?>
                                        <?php 
                                            if($teacher['degree'] == $key){
                                                echo $degree;
                                            }
                                        ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php echo $teacher['description']?></td>
                                <td>
                                    <button type='submit' 
                                            name='btnDelete'>Xóa</button>
                                    <button type='button' 
                                            name='btnEdit' 
                                            onclick='window.location.href="?id="+"<?php echo $teacher['id']?>"'
                                             >Sửa</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>