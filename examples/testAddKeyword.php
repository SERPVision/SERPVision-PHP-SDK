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

require_once '../SERPVision.php';

$serpVision = new SerpVision();
$keywordName = 'Fietsen kopen'; // Keyword phrase
$engineCode = 'google_nl-nl'; // Google engine code see https://serpvision.com/api-endpoints/#google-codes
$device = SerpVision::DESKTOP;

$res = $serpVision->addKeyword($keywordName, $engineCode, $device);

// further processing ....
if ($res['status'] == 'ok') {

    // Save id, keywordName, engineCode and device to database
    echo $res['id'];

}
else {
    // Some error occurred
    echo $res['message'];
}
