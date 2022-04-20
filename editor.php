<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'beranda_editor') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah_editor') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaRundown_editor') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaLead_editor') {
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
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah_editor') {
    include 'views/pages/editor/dataBeritaNaskah_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaRundown_editor') {
    include 'views/pages/editor/dataBeritaRundown_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaLead_editor') {
    include 'views/pages/editor/dataBeritaLead_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'updateVideo_editor') {
    include 'views/pages/editor/updateVideo_editor.php';
} else {
    include 'views/pages/editor/beranda_editor.php';
}

include 'views/layout/footer.php';
