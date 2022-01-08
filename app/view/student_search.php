<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../web/css/student/student_search.css">
    <title>Tìm kiếm sinh viên</title>
</head>
<body>
    <?php
        require '../controller/student_search.php';
    ?>
    <div class="search-student container">
        <div class="form-searchs">
            <form name='search' method='GET'>
                <div class="key-input">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <div class="key-word">Từ Khóa</div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                        <input type="search" name="keyword" id="old-word">
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 button-css ">
                        <button  type="submit" class="button-search"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 count-st" >Số sinh viên tìm thấy <?php echo count($allStudents) ?></div>
            <div class="">
                <table class="show-search">
                    <tr class="show-search">
                        <th class="class-no">No
                        </th>
                        <th class="class-name">Tên sinh viên
                        </th>
                        <th class="class-des">Mô tả chi tiết
                        </th>
                        <th class="class-ac"> Action
                        </th>
                    </tr>
                    <?php foreach ($allStudents as $student) : ?>
                        <tr>
                            <form action="" method='POST'>
                                <td>
                                    <?php echo $student['id']?>
                                    <input type="hidden" name='id' value='<?php echo $student['id']?>' >
                                </td>
                                <td>
                                    <?php echo $student['name']?>
                                </td>
                                <td><?php echo $student['description']?></td>
                                <td class="edit-delete">
                                <button type='button' class="button-deletes"
                                    name='btnDelete'
                                    id='dialogshow'
                                    class="btn-delete" 
                                    onclick="showDialog(<?php echo $student['id']?>)">Xóa
                                </button>
                                <?php include('dialog-confirm/student_confirm.php'); ?>
                                <button type='button' name='btnEdit' class="button-edits" onclick="location.href='student_edit_input.php?idStudent=<?php echo $student['id'] ?>'">Sửa</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="../../web/js/student_search.js"></script>
</html>