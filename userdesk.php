<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'beranda_userdesk') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGhi_userdesk') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGns_userdesk') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahHabari_userdesk') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahSulampa_userdesk') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahDialog_userdesk') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahLc_userdesk') {
    $title = 'Buat Naskah Live Cross';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGhi_userdesk') {
    $title = 'Urutkan Berita GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGns_userdesk') {
    $title = 'Urutkan Berita GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaHabari_userdesk') {
    $title = 'Urutkan Berita Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaNaskah_userdesk') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaRundown_userdesk') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaLead_userdesk') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_userdesk.php';

if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'beranda_userdesk') {
    include 'views/pages/userdesk/beranda_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGhi_userdesk') {
    include 'views/pages/userdesk/buatNaskahGhi_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGns_userdesk') {
    include 'views/pages/userdesk/buatNaskahGns_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahHabari_userdesk') {
    include 'views/pages/userdesk/buatNaskahHabari_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahSulampa_userdesk') {
    include 'views/pages/userdesk/buatNaskahSulampa_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahDialog_userdesk') {
    include 'views/pages/userdesk/buatNaskahDialog_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahLc_userdesk') {
    include 'views/pages/userdesk/buatNaskahLc_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGhi_userdesk') {
    include 'views/pages/userdesk/urutberitaGhi_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGns_userdesk') {
    include 'views/pages/userdesk/urutberitaGns_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaHabari_userdesk') {
    include 'views/pages/userdesk/urutberitaHabari_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaNaskah_userdesk') {
    include 'views/pages/userdesk/dataBeritaNaskah_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaRundown_userdesk') {
    include 'views/pages/userdesk/dataBeritaRundown_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaLead_userdesk') {
    include 'views/pages/userdesk/dataBeritaLead_userdesk.php';
} else {
    include 'views/pages/userdesk/beranda_userdesk.php';
}

include 'views/layout/footer.php';
