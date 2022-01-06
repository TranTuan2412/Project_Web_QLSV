<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['subject_id'];

    $_SESSION["subject_name_error"] = '';
    $_SESSION["subject_school_year_error"] = '';
    $_SESSION["subject_description_error"] = '';
    $_SESSION["subject_avatar_error"] = '';

    $_SESSION["subject_name"] = $_POST["subject_name"];
    $_SESSION["subject_school_year"] = $_POST["subject_school_year"];
    $_SESSION["subject_description"] = $_POST["subject_description"];
    if ($_FILES["subject_avatar"]["name"]) {
        unset($_SESSION['had_avatar']);
        if (
            isset($_SESSION["subject_avatar"]) &&
            $_FILES["subject_avatar"]["name"] != $_SESSION["subject_avatar"]
        ) {
            unlink('../../web/avatar/subject_tmp/' . $_SESSION["subject_avatar"]);
        }
        $_SESSION["subject_avatar"] = $_FILES["subject_avatar"]["name"];
    }

    if (!$_SESSION["subject_name"]) {
        $_SESSION["subject_name_error"] = "Hãy nhập tên môn học.";
    } else {
        if (mb_strlen($_SESSION["subject_name"]) > 100) {
            $_SESSION["subject_name_error"] = "Không nhập quá 100 ký tự.";
        }
    }

    if (!$_SESSION["subject_school_year"]) {
        $_SESSION["subject_school_year_error"] = "Hãy chọn khóa học.";
    }

    if (!$_SESSION["subject_description"]) {
        $_SESSION["subject_description_error"] = "Hãy nhập mô tả chi tiết.";
    } else {
        if (mb_strlen($_SESSION["subject_description"]) > 1000) {
            $_SESSION["subject_description_error"] = "Không nhập quá 1000 ký tự.";
        }
    }

    if (!isset($_SESSION["subject_avatar"]) && !$_SESSION["cur_subject_avatar"]) {
        $_SESSION["subject_avatar_error"] = "Hãy chọn avatar.";
    }

    if (!isset($_SESSION['had_avatar'])) {
        if (
            isset($_SESSION["subject_avatar"]) &&
            getimagesize($_FILES["subject_avatar"]["tmp_name"]) == false
        ) {
            $_SESSION["subject_avatar_error"] = "Avatar phải là file ảnh.";
        }

        if (isset($_SESSION["subject_avatar"])) {
            $target_dir = "../../web/avatar/subject_tmp/";
            $target_file = $target_dir . basename($_FILES["subject_avatar"]["name"]);
            move_uploaded_file($_FILES["subject_avatar"]["tmp_name"], $target_file);
            $_SESSION['had_avatar'] = true;
        }
    }

    if (
        !$_SESSION["subject_name_error"]
        && !$_SESSION["subject_school_year_error"]
        && !$_SESSION["subject_degree_error"]
        && !$_SESSION["subject_description_error"]
        && !$_SESSION["subject_avatar_error"]
    ) {
        header("Location: ../../app/view/subject_edit_confirm.php");
    } else {
        header("Location: ../../app/view/subject_edit_input.php?id=$id");
    }
}
