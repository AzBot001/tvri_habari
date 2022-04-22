<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc') {
    $title = 'Buat Naskah Live Cross';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_reporter.php';

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    include 'views/pages/reporter/beranda_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi') {
    include 'views/pages/buatNaskahGhi.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns') {
    include 'views/pages/buatNaskahGns.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari') {
    include 'views/pages/buatNaskahHabari.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa') {
    include 'views/pages/buatNaskahSulampa.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog') {
    include 'views/pages/buatNaskahDialog.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc') {
    include 'views/pages/buatNaskahLc.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah') {
    include 'views/pages/dataBeritaNaskah.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown') {
    include 'views/pages/dataBeritaRundown.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead') {
    include 'views/pages/dataBeritaLead.php';
} else {
    include 'views/pages/reporter/beranda_reporter.php';
}

include 'views/layout/footer.php';
