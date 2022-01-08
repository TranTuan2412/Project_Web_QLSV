<?php
require_once '../../app/common/define.php';
require_once '../../app/model/subject.php';
session_start();
$_SESSION['flag']='yes';
$id = $_GET['id'];
$_SESSION["subject_id"] = $id;
$subject = getsubject($id);
$subject_name = $subject['name'];
$subject_school_year = $subject['school_year'];
$subject_description = $subject['description'];
$cur_subject_avatar = $subject['avatar'];
$subject_avatar = '';
$_SESSION["cur_subject_avatar"] = $cur_subject_avatar;

if (isset($_SESSION["subject_name"])) {
    $subject_name = $_SESSION["subject_name"];
}
if (isset($_SESSION["subject_school_year"])) {
    $subject_school_year = $_SESSION["subject_school_year"];
}
if (isset($_SESSION["subject_description"])) {
    $subject_description = $_SESSION["subject_description"];
}
if (isset($_SESSION["subject_avatar"])) {
    $subject_avatar = $_SESSION["subject_avatar"];
}

$subject_name_error = $_SESSION["subject_name_error"] ?? '';
$subject_school_year_error = $_SESSION["subject_school_year_error"] ?? '';
$subject_description_error = $_SESSION["subject_description_error"] ?? '';
$subject_avatar_error = $_SESSION["subject_avatar_error"] ?? '';

?>

<html>

<head>
    <link rel="stylesheet" href="../../web/subject/subject_edit_styles.css">
    <script src="../../web/subject/subject_edit_scripts.js"></script>
</head>

<form method='post' action='../../app/controller/subject_edit_input_process.php' enctype="multipart/form-data">
    <div id="edit_subject">
        <div class="error">
            <?php echo $subject_name_error; ?>
        </div>

        <div class='box'>
            <div class="label_box">
                Tên môn học 
            </div>
            
            <input type='textbox' class='input' id='subject_name' name='subject_name' value='<?php echo $subject_name; ?>'>
        </div>

        <div class="error">
            <?php echo $subject_school_year_error; ?>
        </div>

        <div class='box'>
            <div class="label_box">
                Khóa học
            </div>
            
            <select class='input' id='subject_school_year' name='subject_school_year'>
                <option></option>
                <?php
                foreach ($listSchoolYear as $key => $value) {
                    if ($subject_school_year == $key) {
                        echo "<option selected value='$key'> $value </option>";
                    } else {
                        echo "<option value='$key'> $value </option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="error">
            <?php echo $subject_description_error; ?>
        </div>

        <div class='box description'>
            <div class='label_box'>
                Mô tả thêm
            </div>

            <textarea class='input_description' id="subject_description" type="textarea" name="subject_description" ><?php echo $subject_description; ?></textarea>
        </div>
        <div class="error">
            <?php echo $subject_avatar_error; ?>
        </div>
        <div class='box avatar_box'>
            <div class='label_box'>
                Avatar
            </div>

            <img class='avatar' id=img src="../../web/avatar/subject/<?php echo $id; ?>/<?php echo $cur_subject_avatar; ?>">
        </div>

        

        <div class='box'>
            <div class='label_box'>
            </div>

            <div class='input' id='fileNameTextBox'>
                <?php echo $subject_avatar; ?>
            </div>

            <label class="browse_button" for="subject_avatar">
                Browse
            </label>

            <input style="display:none" type="file" id="subject_avatar" name="subject_avatar" onchange="getFileData(this);">

        </div>

        

        <div class='center'>
            <button class='submit_button' id='submit_button' type='submit'> Xác Nhận </button>
        </div>
    </div>

</form>

</html>