<?php
require_once '../../app/common/define.php';
require_once '../../app/model/subject.php';
session_start();
// if( $_SESSION['flag'] !='yes'){
//     header("Location:subject_edit_input.php");
// }  
$id = isset($_SESSION["subject_id"]) ? $_SESSION["subject_id"] : '';
$subject = getsubject($id);
$subject_name = isset($_SESSION["subject_name"]) ? $_SESSION["subject_name"] : '';
$subject_school_year = isset($_SESSION["subject_school_year"]) ? $_SESSION["subject_school_year"] : '';
$subject_description = isset($_SESSION["subject_description"]) ? $_SESSION['subject_description'] : '';
$subject_avatar = '';
if (isset($_SESSION['subject_avatar'])) {
    $subject_avatar = $_SESSION['subject_avatar'];
    $target_avatar_file = '../../web/avatar/subject_tmp/'.$_SESSION['subject_avatar'];
} else {
    $target_avatar_file = '../../web/avatar/subject/'.$id.'/'.$subject['avatar'];
}

?>

<html>

<head>
    <link rel="stylesheet" href="../../web/subject/subject_edit_styles.css">
    <script src="../../web/subject/subject_edit_scripts.js"></script>
</head>

<form method='post' action='../../app/controller/subject_edit_confirm_process.php' enctype="multipart/form-data">
    <div id="edit_subject">
        <div class='box'>
            <div class='label_box'>
                Tên môn học
            </div>

            <div type ='label' class='input'> <?php echo $subject_name; ?> </div>
        </div>
        <div class="error_message">
        </div>
        <div class='box'>
            <div class='label_box'>
                Khóa học
            </div>

            <div class='input'><?php echo $subject_school_year ? $listSchoolYear[$subject_school_year] : ''; ?> </div>
        </div>
        <div class='box     description'>
            <div class='label_box'>
                Mô tả thêm
            </div>

            <textarea readonly class='input_description'><?php echo $subject_description; ?></textarea>
        </div>

        <div class='box avatar_box '>
            <div class='label_box'>
                Avatar
            </div>

            <img class='avatar' src="<?php echo $target_avatar_file; ?>" alt="subject's Avatar">
        </div>

        <div class="error">
        </div>

        <div class='box'>
        </div>



        <div class='button_row'>
            <div class="left_button">
                <button class='submit_button ' id='redit_button' type="button" onclick="history.back()"> Sửa lại </button>
            </div>
            <div class="right_button">
                <button class='submit_button ' id='submit_button' type='submit'> Đăng ký </button>
            </div>
        
        </div>

    </div>

</form>

</html>