<?php

function tampil_naskah_ghi($mysqli){

    $query = $mysqli->query("SELECT * FROM naskah JOIN detail_naskah ON naskah.id_naskah = detail_naskah.id_naskah");

}

?>