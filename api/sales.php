<?php
// create data


$data = [];

$data[] = (object) array('cod'=> 1, 'dt'=> '2017-01-02', 'client'=> 'client 1', 'val'=> 2800 );
$data[] = (object) array('cod'=> 2, 'dt'=> '2017-01-11', 'client'=> 'client 2', 'val'=> 3300 );
$data[] = (object) array('cod'=> 3, 'dt'=> '2017-01-30', 'client'=> 'client 3', 'val'=> 500 );
$data[] = (object) array('cod'=> 4, 'dt'=> '2017-01-11', 'client'=> 'client 4', 'val'=> 3700 );
$data[] = (object) array('cod'=> 5, 'dt'=> '2017-02-07', 'client'=> 'client 1', 'val'=> 3800 );
$data[] = (object) array('cod'=> 6, 'dt'=> '2017-02-16', 'client'=> 'client 5', 'val'=> 3600 );
$data[] = (object) array('cod'=> 7, 'dt'=> '2017-02-16', 'client'=> 'client 6', 'val'=> 3000 );
$data[] = (object) array('cod'=> 8, 'dt'=> '2017-02-20', 'client'=> 'client 3', 'val'=> 500 );
$data[] = (object) array('cod'=> 9, 'dt'=> '2017-03-01', 'client'=> 'client 1', 'val'=> 3500 );
$data[] = (object) array('cod'=> 10, 'dt'=> '2017-03-10', 'client'=> 'client 7', 'val'=> 3700 );
$data[] = (object) array('cod'=> 11, 'dt'=> '2017-03-20', 'client'=> 'client 3', 'val'=> 3500 );
$data[] = (object) array('cod'=> 12, 'dt'=> '2017-03-27', 'client'=> 'client 8', 'val'=> 3700 );

// Write json
$status = 200;
header('Content-type:application/json;charset=utf-8');
header("HTTP/1.0 $status");
echo json_encode($data);
?>
