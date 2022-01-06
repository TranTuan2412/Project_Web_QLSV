<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/subject/subject_search.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <title>Tìm kiếm môn học</title> -->
    <title>Tìm kiếm môn học</title>
</head>
<body>
    <?php
           require '../controller/subject_search.php';
           require '../common/define.php';
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formsearch' method='GET'>
                <div class="col-md-12 filterbuilding">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Khóa học</div>
                    </div>
                    <div class="col-sm-6">
                        <select name="school_year" id="school_year" class="filter" >
                            <option value="none"></option>
                            <?php foreach ($listSchoolYear as $key=>$school_year) : ?>
                                        <option value='<?php echo $key ?>'>
                                                    <?php echo $school_year ?>
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
                 <label class="count__subject">Số môn học tìm thấy : <?php echo count($rowAll) ?></label>
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
                    <?php foreach ($rowAll as $subject) : ?>
                        <tr>
                            <form action="" 
                                  method='POST'>
                                <td>
                                    <?php echo $subject['id']?>
                                    <input type="hidden" 
                                           name='id' 
                                           value='<?php echo $subject['id']?>' >
                                </td>
                                <td>
                                    <?php echo $subject['name']?>
                                </td>
                                <td>
                                    <?php foreach ($listSchoolYear as $key=>$school_year) : ?>
                                        <?php 
                                            if($subject['school_year'] == $key){
                                                echo $school_year;
                                            }
                                        ?>
                                    <?php endforeach; ?>
                                </td>
                                
                                <td><?php echo $subject['description']?></td>
                                <td>
                                    <button type='button' 
                                            name='btnDelete'
                                            id='dialogshow' 
                                            onclick="document.getElementById('my-dialog-<?php echo $subject['id']?>').showModal();" >Xóa</button>
                                            <dialog id="my-dialog-<?php echo $subject['id']?>" style="border:1px solid #4da6ff ">
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12 debai">
                                                            Bạn chắc chắn xóa môn học <?php echo $subject['name']?>?
                                                            <input type="hidden" name="infoID" value="<?php echo $subject['id']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="col-sm-8"></div>
                                                        <div class="col-sm-3"style="text-align:right;display:flex">
                                                            <button  type="submit" id="oki5" class="btn1-style" name='delete'>Confirm</button>
                                                            <button type="button" id="close5"  class="btn-style" 
                                                            onclick="document.getElementById('my-dialog-<?php echo $subject['id']?>').close();">Cancel</button>
                                                        </div>
                                                            
                                                    </div>
                                            </dialog>
                                    <button type='button' 
                                            name='btnEdit' 
                                            onclick='window.location.href="subject_edit_input.php?id="+"<?php echo $subject['id']?>"'
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