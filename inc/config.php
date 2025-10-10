<?php
// 1. Get the current page filename
$current_page_file = basename($_SERVER['PHP_SELF'], '.php');


if ($current_page_file == 'proc_vacancy') {
    $current_page_file = 'Vacancy';
}

if ($current_page_file == 'proc_bookdriver') {
    $current_page_file = 'Book A Driver';
}

if ($current_page_file == 'proc_contact') {
    $current_page_file = 'Contact';
}


$page_file = explode('-', $current_page_file);
$banner_title = ucwords(implode(' ', $page_file));
$banner_bg = $current_page_file.'-banner.jpg';




?>