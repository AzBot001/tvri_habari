<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'beranda_userbiasa') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaNaskah_userbiasa') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaRundown_userbiasa') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaLead_userbiasa') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'updateVideo_userbiasa') {
    $title = 'Update Video';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_userbiasa.php';

if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'beranda_userbiasa') {
    include 'views/pages/userbiasa/beranda_userbiasa.php';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaNaskah_userbiasa') {
    include 'views/pages/userbiasa/dataBeritaNaskah_userbiasa.php';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaRundown_userbiasa') {
    include 'views/pages/userbiasa/dataBeritaRundown_userbiasa.php';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'dataBeritaLead_userbiasa') {
    include 'views/pages/userbiasa/dataBeritaLead_userbiasa.php';
} else if (isset($_GET['t_userbiasa']) && $_GET['t_userbiasa'] == 'updateVideo_userbiasa') {
    include 'views/pages/userbiasa/updateVideo_userbiasa.php';
} else {
    include 'views/pages/userbiasa/beranda_userbiasa.php';
}

include 'views/layout/footer.php';
