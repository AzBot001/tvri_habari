<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi_reporter') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns_reporter') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari_reporter') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa_reporter') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog_reporter') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc_reporter') {
    $title = 'Buat Naskah Live Cross';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah_reporter') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown_reporter') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead_reporter') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_reporter.php';

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    include 'views/pages/reporter/beranda_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi_reporter') {
    include 'views/pages/reporter/buatNaskahGhi_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns_reporter') {
    include 'views/pages/reporter/buatNaskahGns_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari_reporter') {
    include 'views/pages/reporter/buatNaskahHabari_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa_reporter') {
    include 'views/pages/reporter/buatNaskahSulampa_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog_reporter') {
    include 'views/pages/reporter/buatNaskahDialog_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc_reporter') {
    include 'views/pages/reporter/buatNaskahLc_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah_reporter') {
    include 'views/pages/reporter/dataBeritaNaskah_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown_reporter') {
    include 'views/pages/reporter/dataBeritaRundown_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead_reporter') {
    include 'views/pages/reporter/dataBeritaLead_reporter.php';
} else {
    include 'views/pages/reporter/beranda_reporter.php';
}

include 'views/layout/footer.php';
