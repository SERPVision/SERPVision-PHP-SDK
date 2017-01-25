<?php
/**
 * ******************************************************
 *  * Copyright (C) 2016 - 2017 SERP Vision
 *  *
 *  * This file is part of Ranktracker.
 *  *
 *  * Ranktracker can not be copied and/or distributed without the express
 *  * permission of SERP Vision (Legal number: 59005068)
 *  *******************************************************
 */

define("SERPVISION_API_KEY", "Your-SERP-Vison-API-Key");
define("SERPVISION_ENDPOINT", "https://admin.serpVision.com/api");

class SerpVision
{
// Constants
    const DESKTOP = 'desktop';
    const MOBILE = 'mobile';
    const TABLET = 'tablet';
    const VERSION = 'v1.0.1';

// Methods
    public function addKeyword($keywordName, $engineCode, $device)
    {
        $path = '/add';
        $options = [
            'keyword-name' => $keywordName,
            'engine-code' => $engineCode,
            'device' => $device,
        ];

        return self::curl($path, $options);
    }

    public function getCredit()
    {
        $path = '/get-credit';
        $options = [];

        return self::curl($path, $options);
    }

    public function getKeyword($id)
    {
        $path = '/get';
        $options = [
            'id' => $id,
        ];

        return self::curl($path, $options);
    }

    private static function curl($path, $options)
    {
        $options['api-key'] = SERPVISION_API_KEY;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, SERPVISION_ENDPOINT . $path);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query($options));

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $serverOutput = curl_exec($ch);

        curl_close($ch);

        return json_decode($serverOutput, true);
    }
}