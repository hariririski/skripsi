
<?php
$bln = array();
$bln['name'] = 'Bulan';
$rows['name'] = 'Pengunjung';
foreach($lihat as $data){
  $bln['data'][] = $data->bulan;
  $rows['data'][] = $data->jumlah;
}
$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);
