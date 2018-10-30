<?php
require_once __DIR__."/data/anggota.php";

header("Content-Type: application/json");

$list_anggota = array();

if(!isset($_GET['club'])){
  $list_anggota['status'] = 404;
  $list_anggota['message']= "Not Found";
  $list_anggota['data']   = null;

  echo json_encode($list_anggota);
}
else {
  if(!array_key_exists($_GET['club'], $anggota)){
    $list_anggota['status'] = 404;
    $list_anggota['message']= "Not Found";
    $list_anggota['data']   = null;

    echo json_encode($list_anggota);
  }
  else {
    $list_anggota['status'] = 200;
    $list_anggota['message']= "OK";
    $list_anggota['data']   = $anggota[$_GET['club']];

    echo json_encode($list_anggota);
  }
}
