<?php
/*******************************************************
 * Copyright (C) 2016 - 2017 SERP Vision
 *
 * File: testGetKeyword.php
 * Created: 2017 - 01 - 25
 *
 * SERP-Vision-php-sdk can not be copied and/or distributed without the express
 * permission of SERP Vision (Legal number: 59005068)
 *******************************************************/

require_once '../SERPVision.php';

$serpVision = new SerpVision();
$id = 'yourId';
$res = $serpVision->getKeyword($id);

echo json_encode($res);

// further processing ....
if ($res['status'] == 'ok') {

    // ID of this request
    echo $res['status'];
    foreach ($res['organic'] as $result) {
        echo $result['position'] . ' - ' . $result['title'] . ' - ' . $result['url'] . '<br>';
    }
    // save response to your database
}
else {
    // Some error occurred
    echo $res['message'];
}
