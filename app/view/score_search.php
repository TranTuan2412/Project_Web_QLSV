<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../web/css/score/score_search.css">
    <title>Tìm kiếm điểm</title>
</head>
<body>
    <?php
        require '../controller/score_search.php';
        require '../common/define.php';
    ?>
    <div class="container wrapper">
        <div class="input_form">
            <form name="search" method="GET">
                <div class="row input_form_item">
                    <div class="col-md-2 offset-md-2">
                        <label for="sv" class="input_form_item_label">
                            Sinh viên
                        </label>    
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <input type="text" id="sv" name="sv" class="input_form_item_input"/>
                    </div>
                </div>
                <div class="row input_form_item">
                    <div class="col-md-2 offset-md-2">
                        <label for="mh" class="input_form_item_label">
                            Môn học
                        </label>    
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <input type="text" id="mh" name="mh" class="input_form_item_input"/>
                    </div>
                </div>
                <div class="row input_form_item">
                    <div class="col-md-2 offset-md-2">
                        <label for="gv" class="input_form_item_label">
                            Giáo viên
                        </label>    
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <input type="text" id="gv" name="gv" class="input_form_item_input"/>
                    </div>
                </div>
                <input type="submit" name="search" value="Tìm kiếm" class="input_form_submit"/>
            </form>
        </div>
        <div class="res_zone">
            <div class="res_zone_text">
                <div>Số bản ghi tìm thấy : <?php echo count($data) ?> </div>
            </div>
            <div>
                <table class="res_zone_table">
                    <tr>
                        <th>No</th>
                        <th>Sinh viên</th>
                        <th>Môn học</th>
                        <th>Giáo Điểm</th>
                        <th>Điểm</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($data as $scores) :?>
                        <tr>
                            <form method="POST">
                                <td>
                                    <?php echo $scores['id']?>
                                </td>
                                <td>
                                    <?php echo $scores['sinh_vien']?>
                                </td>
                                <td>
                                    <?php echo $scores['mon_hoc']?>
                                </td>
                                <td>
                                    <?php echo $scores['giao_vien']?>
                                </td>
                                <td>
                                    <?php echo $scores['score']?>
                                </td>    
                                <td>
                                    <button class="res_zone_action" type="button" name="deleteBtn" id="dialogshow" onclick="document.getElementById('my-dialog-<?php echo $scores['id']?>').showModal();">Xóa</button>
                                    <dialog id="my-dialog-<?php echo $scores['id']?>">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                Bạn chắc chắn xóa điểm của sinh viên <?php echo $scores['sinh_vien']?>?
                                                <input type="hidden" name="scoreId" value="<?php echo $scores['id']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="col-sm-8"></div>
                                            <div class="col-sm-4 dialog-action">
                                                <button  type="submit" id="oki5" class="btn1-style" name='delete'>Confirm</button>
                                                <button type="button" id="close5"  class="btn-style" 
                                                onclick="document.getElementById('my-dialog-<?php echo $scores['id']?>').close();">Cancel</button>
                                            </div>
                                        </div>
                                    </dialog>
                                    <button class="res_zone_action" disabled>Sửa (comming soon)</button>
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

            

    