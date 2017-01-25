# SERP-Vision-php-sdk

This SDK is available for SERP Vision. You can use the API to provide SERP data in your own application.
Request your API-Key here https://serpvision.com. <br><br>
The full documentation can be found on the website https://serpvision.com/api-endpoints/

**Get started**<br>

_Download_

    git clone https://github.com/SERPVision/SERP-Vision-php-sdk

_Define API-key_

    Define SERPVISION_API_KEY in the SERPVision.php file with your own API-key. 

**Example**<br>

    $serpVision = new Serpvision();

    echo $serpVision->getCredit();