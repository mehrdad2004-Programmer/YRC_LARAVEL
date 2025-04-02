<?php

    require_once __DIR__ . "/../modules/database/database.php";

    $db = new Database();

    $path = "";

    switch($_GET['mode']){
        case "course":
            $db->delete('courses', ["code" => $_GET['code']]);
            $db->delete('registration', ['course_code' => $_GET['code']]);
            $path = "view_course.php";
            break;
        case "student":
            $db->delete('registration', ["st_id_no" => $_GET['id_no']]);
            $path = "course_list.php";
            break;
    }


    header("Location: " . $path);
    exit;