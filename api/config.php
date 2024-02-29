<?php
class ACLandingConfig {
    const API_URL = 'https://api.adcombo.com/api/v2/order/create/';
    const API_KEY = '335bbd07abab0a0b3b92c276a876499e';
    const LOG_ENABLED = true;        // Log orders to orderlog.php
    const GEOIP_ENABLED = true;      // Enable GeoIP detection
    const DETECT_MOBILE = true;      // Enable mobile browser detection
    const API_URL_PAYMENT_REDIRECT = 'https://adc-land-api.name/payment/second';
    const API_URL_PAYMENT_KEY = 'second_page_url';
    const API_BROKER_URL = '';
    const TEST_LEAD = false;
    // Pixel code. Multiline PHP variable.
    const PIXEL_CODE = <<<EOV
<!-- Empty pixel code -->
EOV;
//     This is EXAMPLE of custom parameters. They will we added to order regardless of URL arguments\macros.
//     You can use them with "clean" links and add specific parameters to order. They will NOT OVERWRITE link args.
    const CUSTOM_PARAMS = array(
       'subacc' => '',
       'subacc2' => '',
       'subacc3' => '',
       'subacc4' => '',
    );
}
?>