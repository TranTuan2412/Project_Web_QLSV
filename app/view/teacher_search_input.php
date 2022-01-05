<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/teacher/teacher_search.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Tìm kiếm giáo viên</title>
</head>
<body>
    <?php
        require '../controller/teacher_search.php';
        require '../common/define.php';
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formsearch' method='GET'>
                <div class="col-md-12 filterbuilding">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Bộ Môn</div>
                    </div>
                    <div class="col-sm-6">
                        <select name="specialized" id="specialized" class="filter" >
                            <option value="none"></option>
                            <?php foreach ($listSpecialized as $key=>$specialized) : ?>
                                        <option value='<?php echo $key ?>'>
                                                    <?php echo $specialized ?>
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
                        <button  type="submit" class="filtervalue"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>

        
            <div class="col-md-12">
            <div class="count col-md-12">
                 <label class="count__teacher">Số giáo viên tìm thấy : <?php echo count($rowAll) ?></label>
            </div>
                <table id="admin" class="center">
                    <tr class="header">
                        <th style="text-align:center;">No
                        </th>
                        <th style="text-align:center;">Tên giáo viên
                        </th>
                        <th style="text-align:center;">Khoa
                        </th>
                        <th style="text-align:center;">Mô tả chi tiết
                        </th>
                        <th style="text-align:center;">Action
                        </th>
                    </tr>
                    <?php foreach ($rowAll as $teacher) : ?>
                        <tr>
                            <form action="" 
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
                                    <?php foreach ($listSpecialized as $key=>$specialized) : ?>
                                        <?php 
                                            if($teacher['specialized'] == $key){
                                                echo $specialized;
                                            }
                                        ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php echo $teacher['description']?></td>
                                <td>
                                    <button type='button' 
                                            name='btnDelete'
                                            id='dialogshow' 
                                            onclick="document.getElementById('my-dialog-<?php echo $teacher['id']?>').showModal();" >Xóa</button>
                                            <dialog id="my-dialog-<?php echo $teacher['id']?>" style="border:1px solid #4da6ff ">
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12 debai">
                                                            Bạn chắc chắn xóa giáo viên <?php echo $teacher['name']?>?
                                                            <input type="hidden" name="infoID" value="<?php echo $teacher['id']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="col-sm-8"></div>
                                                        <div class="col-sm-3"style="text-align:right;display:flex">
                                                            <button  type="submit" id="oki5" class="btn1-style" name='delete'>Confirm</button>
                                                            <button type="button" id="close5"  class="btn-style" 
                                                            onclick="document.getElementById('my-dialog-<?php echo $teacher['id']?>').close();">Cancel</button>
                                                        </div>
                                                            
                                                    </div>
                                            </dialog>
                                    <button type='button' 
                                            name='btnEdit' 
                                            onclick='window.location.href="teacher_edit_input.php?id="+"<?php echo $teacher['id']?>"'
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