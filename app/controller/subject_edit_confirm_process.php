<?php
require_once '../../app/model/subject.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['subject_id'];
    $subject_name = $_SESSION["subject_name"];
    $subject_school_year = $_SESSION["subject_school_year"];
    $subject_description = $_SESSION['subject_description'];
    $subject_avatar = $_SESSION['cur_subject_avatar'];

    if (isset($_SESSION['subject_avatar'])) {
        if (
            !file_exists('../../web/avatar/subject/' . $id . '/' . $_SESSION['subject_avatar'])
            && $subject_avatar
        ) {
            unlink('../../web/avatar/subject/' . $id . '/' . $subject_avatar); 
        }
        $subject_avatar = $_SESSION['subject_avatar']; 
        $cur_avatar_dir = '../../web/avatar/subject_tmp/' . $_SESSION['subject_avatar'];
        $target_avatar_dir = '../../web/avatar/subject/' . $id . '/' . $_SESSION['subject_avatar'];
        if (!file_exists('../../web/avatar/subject/' . $id)) {
            mkdir('../../web/avatar/subject/' . $id, 0777, true);
        }
        rename($cur_avatar_dir, $target_avatar_dir);
    }

    if ($subject_name &&$subject_avatar && $subject_description && $subject_school_year) {
        updatesubject(
            $id,
            $subject_name,
            $subject_avatar,
            $subject_description,
            $subject_school_year
        );
    }
    unset($_SESSION['subject_id']);
    unset($_SESSION['subject_name']);
    unset($_SESSION['subject_school_year']);
    unset($_SESSION['subject_description']);
    unset($_SESSION['cur_subject_avatar']);
    unset($_SESSION['subject_avatar']);
    unset($_SESSION['had_avatar']);

    header("Location: ../../app/view/subject_edit_complete.php");
}
