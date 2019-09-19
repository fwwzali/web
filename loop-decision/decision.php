<?php

$npm = '1810020';
$angkatan = substr($npm,0,2);

switch ($angkatan) {
  case '19':
    echo "anak baru";
    break;
  case '17':
    echo "angkatan saya";
    break;
  case '15':
    echo "waktunya lulus";
    break;
  default:
    echo "angaktan 20".$angkatan;
    break;
}
