
<!-- <form  method="post">
<input type="number" name="amt" id="" required>
    <select name="cur" id="" required>
        <option value="PKR">PKR</option>
        <option value="GBP">GBP</option>
        <option value="EUR">EUR</option>
        <option value="AUD">AUD</option>

    </select>
<input type="submit" value="submit" name="submit">

</form> -->

<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://openexchangerates.org/api/currencies.json?prettyprint=true&show_alternative=true&show_inactive=false&app_id=5809830bba8e42658d1431e53c11b776",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
?>

    <h1>Currency Converter</h1>
    <form method="post" action="convert.php">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required>
        
        <label for="from">From:</label>
        <select id="from" name="from">
            <!-- <option value="USD">USD</option> -->
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Add more options as needed -->
        </select>
        
        <label for="to">To:</label>
        <select id="to" name="to">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Add more options as needed -->
        </select>
        
        <button type="submit">Convert</button>
    </form>
</body>
</html>
