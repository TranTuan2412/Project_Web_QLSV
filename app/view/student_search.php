<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../web/student/student.css">
    <title>Tìm kiếm sinh viên</title>
</head>
<body>
    <?php
        require '../controller/student_search.php';
        require '../common/define.php';
    ?>
    <div class="search-student container">
        <div class="">
            <form name='search' method='GET'>
                <div class="key-input">
                    <div class="col-sm-2">
                        <div class="key-word">Từ Khóa</div>
                    </div>
                    <div class="col-sm-10">
                        <input type="search" name="keyword" class="filter">
                    </div>
                </div>
                
                <div class="col-md-12 button-css ">
                        <button  type="submit" class="button-search"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>

            </form>
            <div class="col-md-12">Tìm thấy <?php echo count($allStudents) ?> sinh viên </div>
            <div class="">
                <table class="">
                    <tr class="">
                        <th style="width:5%;">No
                        </th>
                        <th style="width:35%;">Tên sinh viên
                        </th>
                        <th style="width:40%;">Mô tả chi tiết
                        </th>
                        <th style="width:20%;"> Action
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
                                <button type='button' 
                                    name='btnDelete'
                                    id='dialogshow' 
                                    onclick="showDialog()">Xóa
                                </button>
                                <?php include('dialog-confirm/student_confirm.php'); ?>
                                <button type='button' name='btnEdit' onclick='nextPageEdit()'>Sửa</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    function showDialog(){
        document.getElementById('student-<?php echo $student['id']?>').showModal();
    }
    function closeDialog(){
        document.getElementById('student-<?php echo $student['id']?>').close();
    }
    function nextPageEdit(){
        window.location.href="student_edit_input.php?idStudent=<?php echo $student['id'] ?>"
    }
</script>
</html>