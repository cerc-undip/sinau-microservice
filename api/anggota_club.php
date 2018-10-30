<?php

header("Content-Type: application/json");

$list_anggota = array();

if(!isset($_GET['club'])){
  $list_anggota['status'] = 404;
  $list_anggota['message']= "Not Found";
  $list_anggota['data']   = null;

  echo json_encode($list_anggota);
}
