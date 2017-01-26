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

define("SERPVISION_ENDPOINT", "https://admin.serpVision.com/api");

class SerpVision
{
// Constants
    const DESKTOP = 'desktop';
    const MOBILE = 'mobile';
    const TABLET = 'tablet';
    const VERSION = 'v1.0.3';

// Methods
    public function addKeyword($keywordName, $engineCode, $device, $apiKey)
    {
        $path = '/add';
        $options = [
            'keyword-name' => $keywordName,
            'engine-code' => $engineCode,
            'device' => $device,
        ];

        return self::curl($path, $options, $apiKey);
    }

    public function getCredit($apiKey)
    {
        $path = '/get-credit';
        $options = [];

        return self::curl($path, $options, $apiKey);
    }

    public function getKeyword($id, $apiKey)
    {
        $path = '/get';
        $options = [
            'id' => $id,
        ];

        return self::curl($path, $options, $apiKey);
    }

    private static function curl($path, $options, $apiKey)
    {
        $options['api-key'] = $apiKey;

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