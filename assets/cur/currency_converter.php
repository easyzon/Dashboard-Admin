<?php
// if(isset($_POST['submit'])){
//     $amt = $_POST['amt'];
//     $cur = $_POST['cur'];
//     $url="https://api.ratesapi.io/api/latest?base=USD&symbols=$cur
//     ";
//     $ch=curl_init();
//     curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//     curl_setopt($ch,CURLOPT_URL,$url);
//     $result=curl_exec($ch);
//     curl_close($ch);
//     echo"<pre>";
//     print_r($result);
// }

// Replace YOUR_APP_ID with your Open Exchange Rates API key
$url = "https://openexchangerates.org/api/latest.json?app_id=5809830bba8e42658d1431e53c11b776";

// Make a request to the API endpoint
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

// Parse the JSON data
$rates = json_decode($data, true);

// List of currencies to include in the conversion list
$currencies = array(
    'USD' => 'US Dollar',
    'EUR' => 'Euro',
    'GBP' => 'British Pound',
    'JPY' => 'Japanese Yen',
    // Add more currencies as needed
);

// Output the currency conversion list
echo '<select name="currency">';
foreach ($currencies as $currency_code => $currency_name) {
    if (isset($rates['rates'][$currency_code])) {
        $exchange_rate = $rates['rates'][$currency_code];
        echo '<option value="' . $currency_code . '">' . $currency_name . '</option>';
    }
}
echo '</select>';

?>