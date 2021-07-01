<?php declare(strict_types=1);


namespace Butvin\ForeverYoung;


use FacebookAds\Api;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdSetFields;

use FacebookAds\Logger\CurlLogger;


$app_id = getenv('APP_ID');
$app_secret = getenv('APP_SECRET');
$access_token = getenv('ACCESS_TOKEN');
$account_id = getenv('ACCOUNT_ID');

// Initialize a new Session and instantiate an Api object
Api::init($app_id, $app_secret, $access_token);
// The Api object is now available through singleton
$api = Api::instance();
// Logger
$api->setLogger(new CurlLogger());

$account = new AdAccount($account_id);
//$account->read(array('id'));





/* PHP SDK v5.0.0
 make the API call
try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get(
        '...?fields={fieldname_of_type_Campaign}',
        '{access-token}'
    );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
$graphNode = $response->getGraphNode();

 handle the result */