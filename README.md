# SERP-Vision-php-sdk

This SDK is available for SERP Vision. You can use the API to provide SERP data in your own application.
Request your API-Key here https://serpvision.com. <br><br>
The full documentation can be found on the website https://serpvision.com/api-endpoints/

#Get started

**Install with composer (preferred)**

Either run

    $ php composer.phar require serp-vision/serp-vision-php-sdk "dev-master"

or add

    "serp-vision/serp-vision-php-sdk": "dev-master"
to the require section of your composer.json file.

**Without composer**<br>

_Download_

    git clone https://github.com/SERPVision/SERPVision-php-sdk.git

#Example<br>

    $serpVision = new Serpvision($apiKey);

    echo $serpVision->getCredit('s4fjois9034rffjsf0ddej092d');