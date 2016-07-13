<?php
    include_once ("../includes/connection.php");
    include_once ("../models/searchModel.php");

    $institution = $_POST['institution'];
    $subject = $_POST['subject'];
    $rank = $_POST['rank'];
    if (!empty($institution) && !empty($subject) && !empty($rank)) {
        search_by_rank_subject_institution($connection, $institution, $rank, $subject);
    } else
    if (!empty($institution) && !empty($subject)) {
            search_by_institution_subject($connection, $institution, $subject);
    } else
        if (!empty($institution) && !empty($rank)) {
            search_by_rank_institution($connection, $rank, $institution);
    } else
    if (!empty($rank) && !empty($subject)) {
            search_by_rank_subject($connection, $rank, $subject);
    } else
    if (!empty($subject)) {
       search_by_subject($connection, $subject);
    } else
    if (!empty($institution)) {
        search_by_institution($connection, $institution);
    } else
    if (!empty($rank)) {
       search_by_rank($connection, $rank);
    }
    if (isset($_POST['word'])) {
        $name = $_POST['word'];
        if (!empty($name)) {
            search_by_name($connection, $name);
        }
    }
