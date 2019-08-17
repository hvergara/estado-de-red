<?php

// Especifica el contenido de la web como JSON.
header('Content-Type: application/json; charset=utf-8');

// Incluye la extensión para simplificar el Web-Scraping.
include('simple_html_dom.php');

$estadoRed = file_get_html('https://metro.cl/tu-viaje/estado-red');

$infoL1 = $estadoRed->find('#infoL1  .popover-body.fSize12', 0)->plaintext;
$infoL2 = $estadoRed->find('#infoL2  .popover-body.fSize12', 0)->plaintext;
$infoL3 = $estadoRed->find('#infoL3  .popover-body.fSize12', 0)->plaintext;
$infoL4 = $estadoRed->find('#infoL4  .popover-body.fSize12', 0)->plaintext;
$infoL4A = $estadoRed->find('#infoL4a  .popover-body.fSize12', 0)->plaintext;
$infoL5 = $estadoRed->find('#infoL5  .popover-body.fSize12', 0)->plaintext;
$infoL6 = $estadoRed->find('#infoL6  .popover-body.fSize12', 0)->plaintext;

// Si no hay nada en el PopUp, la línea está bien.
if ($infoL1 == null) {
  $infoL1 = "OK";
} else {
  $infoL1 = preg_replace('/\\t/', '', $infoL1);
  $infoL1 = preg_replace('/\\r/', '', $infoL1);
  $infoL1 = preg_replace('/\\n/', '', $infoL1);
}

if ($infoL2 == null) {
  $infoL2 = "OK";
} else {
  $infoL2 = preg_replace('/\\t/', '', $infoL2);
  $infoL2 = preg_replace('/\\r/', '', $infoL2);
  $infoL2 = preg_replace('/\\n/', '', $infoL2);
}

if ($infoL3 == null) {
  $infoL3 = "OK";
} else {
  $infoL3 = preg_replace('/\\t/', '', $infoL3);
  $infoL3 = preg_replace('/\\r/', '', $infoL3);
  $infoL3 = preg_replace('/\\n/', '', $infoL3);
}

if ($infoL4 == null) {
  $infoL4 = "OK";
} else {
  $infoL4 = preg_replace('/\\t/', '', $infoL4);
  $infoL4 = preg_replace('/\\r/', '', $infoL4);
  $infoL4 = preg_replace('/\\n/', '', $infoL4);
}

if ($infoL4A == null) {
  $infoL4A = "OK";
} else {
  $infoL4A = preg_replace('/\\t/', '', $infoL4A);
  $infoL4A = preg_replace('/\\r/', '', $infoL4A);
  $infoL4A = preg_replace('/\\n/', '', $infoL4A);
}

if ($infoL5 == null) {
  $infoL5 = "OK";
} else {
  $infoL5 = preg_replace('/\\t/', '', $infoL5);
  $infoL5 = preg_replace('/\\r/', '', $infoL5);
  $infoL5 = preg_replace('/\\n/', '', $infoL5);
}

if ($infoL6 == null) {
  $infoL6 = "OK";
} else {
  $infoL6 = preg_replace('/\\t/', '', $infoL6);
  $infoL6 = preg_replace('/\\r/', '', $infoL6);
  $infoL6 = preg_replace('/\\n/', '', $infoL6);
}

// –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

// Define los datos a mostrar en el JSON y su orden.
$json = array('L1' => $infoL1, 'L2' => $infoL2, 'L3' => $infoL3, 'L4' => $infoL4, 'L4A' => $infoL4A, 'L5' => $infoL5, 'L6' => $infoL6);

// Resultado en JSON! <3
echo json_encode($json,JSON_UNESCAPED_UNICODE);

?>
