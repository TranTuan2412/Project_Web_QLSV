<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="../../web/subject/subject_search.css" rel="stylesheet" type="text/css">
    <title>Tìm kiếm môn học</title>
</head>

<body>
    <?php
    require '../controller/subject_search.php';
    // require '../controller/subject_delete.php';
    require '../common/define.php';
    ?>
    <fieldset class="content container">
        <form name='formsearch' method='POST'>
            <div class="seacrch">
                <br>
                <div class="col-sm-4">
                    <div class="word">Khóa học</div>
                </div>
                <div class="col-sm-6">
                    <label for="" style='width:60%'>
                        <select class="filter" name="school_year">
                            <option></option>
                        </select>
                    </label>
                </div>
                </br>
                <br>
                <div class="col-sm-4">
                    <div class="word">Từ Khóa</div>
                </div>
                <div class="col-sm-6">
                    <label for="" style='width:60%'>
                        <input type="search" class="filter" id="filter" name="data">
                    </label>
                </div>
                <br>
                <br>
                <div class="">
                    <button type="submit" class="filtervalue" id="btn-search" name="search">Tìm Kiếm</button>
                </div>
                <br>
            </div>
        </form>
        <div class="">
            <table id="admin">
                <tr class="header">
                    <td style="width:5%;">No</td>
                    <td style="width:35%;">Tên môn học</td>
                    <td style="width:15%;">Khóa học</td>
                    <td style="width:25%;">Mô tả chi tiết</td>
                    <td style="width:20%;"> Action</td>
                </tr>
                <?php foreach ($stu as $subject) : ?>
                    <tr>
                        <form method='POST'>
                            <td>
                                <?php echo $subject['id'] ?>
                                <input type="hidden" name='id' value='<?php echo $subject['id'] ?>'>
                            </td>
                            <td>
                                <?php echo $subject['name'] ?>
                            </td>
                            <td><?php echo $subject['school_year'] ?></td>
                            <td><?php echo $subject['description'] ?></td>
                            <td>
                                <button type="submit" name='delete'>Xóa</button>
                                <button type='button' name='btnEdit' onclick='window.location.href="../controller/subject_edit.php?id="+"<?php echo $subject[`id`] ?>"'>Sửa</button>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </fieldset>
</body>

</html>