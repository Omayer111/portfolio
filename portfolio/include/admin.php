<?php

require('../include/db.php');

if (isset($_POST['update-section'])) {
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $interest = $_POST['interest'] ?? 0;
    $project = $_POST['project'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE section_control SET home_section='$home',about_section='$about',interest_section='$interest',project_section='$project',contact_section='$contact' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php' </script>";
    }
}
if (isset($_POST['update-home'])) {

    $upper_from = mysqli_real_escape_string($db, $_POST['upper_from']);
    $from_where = mysqli_real_escape_string($db, $_POST['from_where']);

    $query = "UPDATE home SET upper_from='$upper_from',from_where='$from_where' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?homesection=true';</script>";
    }
}
if (isset($_POST['update-about'])) {

    $about_pic = mysqli_real_escape_string($db, $_POST['about_pic']);
    $about_me = mysqli_real_escape_string($db, $_POST['about_me']);
    $skills_problem = mysqli_real_escape_string($db, $_POST['skills_problem']);
    $skills_problem1 = mysqli_real_escape_string($db, $_POST['skills_problem1']);
    $skills_app = mysqli_real_escape_string($db, $_POST['skills_app']);
    $skills_app1 = mysqli_real_escape_string($db, $_POST['skills_app1']);
    $skills_ml = mysqli_real_escape_string($db, $_POST['skills_ml']);
    $skills_ml1 = mysqli_real_escape_string($db, $_POST['skills_ml1']);
    $exp_dsa = mysqli_real_escape_string($db, $_POST['exp_dsa']);
    $exp_dsa1 = mysqli_real_escape_string($db, $_POST['exp_dsa1']);
    $exp_app = mysqli_real_escape_string($db, $_POST['exp_app']);
    $exp_app1 = mysqli_real_escape_string($db, $_POST['exp_app1']);
    $exp_ml = mysqli_real_escape_string($db, $_POST['exp_ml']);
    $exp_ml1 = mysqli_real_escape_string($db, $_POST['exp_ml1']);
    $edu_high = mysqli_real_escape_string($db, $_POST['edu_high']);
    $edu_high1 = mysqli_real_escape_string($db, $_POST['edu_high1']);
    $edu_be = mysqli_real_escape_string($db, $_POST['edu_be']);
    $edu_be1 = mysqli_real_escape_string($db, $_POST['edu_be1']);

    $query = "UPDATE about SET about_pic='$about_pic',about_me='$about_me',skills_problem='$skills_problem',skills_problem1='$skills_problem1',skills_app='$skills_app',
    skills_app1='$skills_app1',skills_ml='$skills_ml',skills_ml1='$skills_ml1',
    exp_dsa='$exp_dsa',exp_dsa1='$exp_dsa1',exp_app='$exp_app',exp_app1='$exp_app1',
    exp_ml='$exp_ml',exp_ml1='$exp_ml1',edu_high='$edu_high',
    edu_high1='$edu_high1',edu_be='$edu_be',edu_be1='$edu_be1' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?aboutsection=true';</script>";
    }
}
if (isset($_POST['update-interest'])) {

    $int_ml = mysqli_real_escape_string($db, $_POST['int_ml']);
    $int_ml1 = mysqli_real_escape_string($db, $_POST['int_ml1']);
    $int_cn = mysqli_real_escape_string($db, $_POST['int_cn']);
    $int_cn1 = mysqli_real_escape_string($db, $_POST['int_cn1']);
    $int_phy = mysqli_real_escape_string($db, $_POST['int_phy']);
    $int_phy1 = mysqli_real_escape_string($db, $_POST['int_phy1']);

    $query = "UPDATE interest SET int_ml='$int_ml',int_ml1='$int_ml1',
    int_cn='$int_cn',int_cn1='$int_cn1',int_phy='$int_phy',int_phy1='$int_phy1' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?interestsection=true';</script>";
    }
}
if (isset($_POST['update-project'])) {

    $first_pic = mysqli_real_escape_string($db, $_POST['first_pic']);
    $first = mysqli_real_escape_string($db, $_POST['first']);
    $first1 = mysqli_real_escape_string($db, $_POST['first1']);
    $link1 = mysqli_real_escape_string($db, $_POST['link1']);

    $second_pic = mysqli_real_escape_string($db, $_POST['second_pic']);
    $second = mysqli_real_escape_string($db, $_POST['second']);
    $second1 = mysqli_real_escape_string($db, $_POST['second1']);
    $link2 = mysqli_real_escape_string($db, $_POST['link2']);

    $third_pic = mysqli_real_escape_string($db, $_POST['third_pic']);
    $third = mysqli_real_escape_string($db, $_POST['third']);
    $third1 = mysqli_real_escape_string($db, $_POST['third1']);
    $link3 = mysqli_real_escape_string($db, $_POST['link3']);

    $query = "UPDATE project SET first_pic='$first_pic', first='$first',first1='$first1',link1='$link1',second_pic='$second_pic',
    second='$second',second1='$second1',link2='$link2',third_pic='$third_pic',third='$third',third1='$third1',link3='$link3' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?projectsection=true';</script>";
    }
}
if (isset($_POST['update-contact'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);

    $query = "UPDATE contact SET email='$email',phone='$phone' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?contactsection=true';</script>";
    }
}
if (isset($_POST['update-account'])) {

    $user_pic = mysqli_real_escape_string($db, $_POST['user_pic']);

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "UPDATE admin SET user_pic='$user_pic', email='$email',password='$password' WHERE id=1";
    $run = mysqli_query($db, $query);

    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?accountsettings=true';</script>";
    }
}
