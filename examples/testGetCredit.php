<?php
/*******************************************************
 * Copyright (C) 2016 - 2017 SERP Vision
 *
 * File: testGetCredit.php
 * Created: 2017 - 01 - 25
 *
 * SERP-Vision-php-sdk can not be copied and/or distributed without the express
 * permission of SERP Vision (Legal number: 59005068)
 *******************************************************/

require_once '../SERPVision.php';

define("SERPVISION_API_KEY", "MY-API-KEY");

$serpVision = new SerpVision();

$res = $serpVision->getCredit(SERPVISION_API_KEY);

// further processing ....
if ($res['status'] == 'ok') {
    // ID of this request
    echo $res['credit'];
}
else {
    // Some error occurred
    echo $res['message'];
}
?>