<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'beranda_editor') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaRundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaLead') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'updateVideo_editor') {
    $title = 'Update Video';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_editor.php';

if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'beranda_editor') {
    include 'views/pages/editor/beranda_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah') {
    include 'views/pages/dataBeritaNaskah.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaRundown') {
    include 'views/pages/dataBeritaRundown.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaLead') {
    include 'views/pages/dataBeritaLead.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'updateVideo_editor') {
    include 'views/pages/editor/updateVideo_editor.php';
} else {
    include 'views/pages/editor/beranda_editor.php';
}

include 'views/layout/footer.php';
