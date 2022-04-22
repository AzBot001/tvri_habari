<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';

if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'beranda_userdesk') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGhi') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGns') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahHabari') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahSulampa') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahDialog') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahLc') {
    $title = 'Buat Naskah Live Cross';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGhi') {
    $title = 'Urutkan Berita GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGns') {
    $title = 'Urutkan Berita GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaHabari') {
    $title = 'Urutkan Berita Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaNaskah') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaRundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaLead') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar_userdesk.php';

if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'beranda_userdesk') {
    include 'views/pages/userdesk/beranda_userdesk.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGhi') {
    include 'views/pages/buatNaskahGhi.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahGns') {
    include 'views/pages/buatNaskahGns.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahHabari') {
    include 'views/pages/buatNaskahHabari.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahSulampa') {
    include 'views/pages/buatNaskahSulampa.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahDialog') {
    include 'views/pages/buatNaskahDialog.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'buatNaskahLc') {
    include 'views/pages/buatNaskahLc.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGhi') {
    include 'views/pages/userdesk/urutberitaGhi.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaGns') {
    include 'views/pages/userdesk/urutberitaGns.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'urutberitaHabari') {
    include 'views/pages/userdesk/urutberitaHabari.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaNaskah') {
    include 'views/pages/dataBeritaNaskah.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaRundown') {
    include 'views/pages/dataBeritaRundown.php';
} else if (isset($_GET['t_userdesk']) && $_GET['t_userdesk'] == 'dataBeritaLead') {
    include 'views/pages/dataBeritaLead.php';
} else {
    include 'views/pages/userdesk/beranda_userdesk.php';
}

include 'views/layout/footer.php';
