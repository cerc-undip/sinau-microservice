<?php

$list_club = [
  "status" => 200,
  "message"=> "OK",
  "data"   => [
    [
      "nama"           => "Software",
      "jumlah_anggota" => 30
    ],
    [
      "nama"           => "Jaringan",
      "jumlah_anggota" => 25
    ]
  ]
];

header("Content-Type: application/json");

echo json_encode($list_club);