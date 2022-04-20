<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah_admin') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaRundown_admin') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaLead_admin') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'formatTimredaksi_admin') {
    $title = 'Format tim Redaksi';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'naskahDefault_admin') {
    $title = 'Naskah Default';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'editNaskah_admin') {
    $title = 'edit Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'kategori_admin') {
    $title = 'kategori_admin';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'cu_admin') {
    $title = 'Current Affairs';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_admin.php';

if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    include 'views/pages/admin/beranda_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah_admin') {
    include 'views/pages/admin/dataBeritaNaskah_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaRundown_admin') {
    include 'views/pages/admin/dataBeritaRundown_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaLead_admin') {
    include 'views/pages/admin/dataBeritaLead_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'verivikasiUser_admin') {
    include 'views/pages/admin/verivikasiUser_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'formatTimredaksi_admin') {
    include 'views/pages/admin/formatTimredaksi_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'naskahDefault_admin') {
    include 'views/pages/admin/naskahDefault_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'editNaskah_admin') {
    include 'views/pages/admin/editNaskah_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'kategori_admin') {
    include 'views/pages/admin/kategori_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'cu_admin') {
    include 'views/pages/admin/cu_admin.php';
} else {
    include 'views/pages/admin/beranda_admin.php';
}

include 'views/layout/footer.php';
