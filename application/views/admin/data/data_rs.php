
<?php
$bln = array();
$bln['name'] = 'Rumah Sakit';
$rows['name'] = 'Pasien';
foreach($lihat as $data){
  $bln['data'][] = $data->rs;
  $rows['data'][] = $data->jumlah;
}
$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);
