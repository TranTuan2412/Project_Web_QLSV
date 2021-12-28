<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="css" href="/web/student/student.css">
    <title>Tìm kiếm phòng học</title>
</head>
<body>
    <?php
        require '../controller/student_search.php';
        require '../common/define.php';
    ?>
    <div class="content container">
        <div class="">
            <form name='formsearch' action='../controller/student_search.php' method='GETs'>
                <div class="seacrch">
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
                <div class="" style='text-align: center;margin-top:20px'>
                        <button  type="button" class="filtervalue"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>
        
            <div class="">
                <table id="admin">
                    <tr class="header">
                        <th style="width:5%;">No
                        </th>
                        <th style="width:35%;">Tên sinh viên+
                        </th>
                        <th style="width:40%;">Mô tả chi tiết
                        </th>
                        <th style="width:20%;"> Action
                        </th>
                    </tr>
                    <?php foreach ($listStudents as $student) : ?>
                        <tr>
                            <form action="../controller/student_search.php" 
                                  method='POST'>
                                <td>
                                    <?php echo $student['id']?>
                                    <input type="hidden" 
                                           name='id' 
                                           value='<?php echo $student['id']?>' >
                                </td>
                                <td>
                                    <?php echo $student['name']?>
                                </td>
                                <td><?php echo $student['description']?></td>
                                <td>
                                    <button type='submit' 
                                            name=''>Xóa</button>
                                    <button type='button' 
                                            name='btnEdit' 
                                            onclick='window.location.href="student_edit.php?id="+"<?php echo $student['id'] ?>"'
                                             >Sửa</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>