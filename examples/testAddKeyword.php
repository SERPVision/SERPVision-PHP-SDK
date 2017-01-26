<?php
/*******************************************************
 * Copyright (C) 2016 - 2017 SERP Vision
 *
 * File: testAddKeyword.php
 * Created: 2017 - 01 - 25
 *
 * SERP-Vision-php-sdk can not be copied and/or distributed without the express
 * permission of SERP Vision (Legal number: 59005068)
 *******************************************************/

use SERPVision\SERPVisionApi;

require_once '../SERPVision.php';

define("SERPVISION_API_KEY", "MY-API-KEY");

$serpVision = new SERPVisionApi();
$keywordName = 'Fietsen kopen'; // Keyword phrase
$engineCode = 'google_nl-nl'; // Google engine code see https://serpvision.com/api-endpoints/#google-codes
$device = SERPVisionApi::DESKTOP;

$res = $serpVision->addKeyword($keywordName, $engineCode, $device, SERPVISION_API_KEY);

// further processing ....
if ($res['status'] == 'ok') {

    // Save id, keywordName, engineCode and device to database
    echo $res['id'];

}
else {
    // Some error occurred
    echo $res['message'];
}
