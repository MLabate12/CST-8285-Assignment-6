<!DOCTYPE html>
<html lang="en">
<head>
<title>Currency Converter</title>
<meta charset="UTF-8">
</head>
<body>
<form action="currency.php" method="post">
    <label for="input">Amount:</label>
    <input type="text" id="input" name="input" value="0.00"><br>
  
<h2>Convert from:</h2>
<input type="radio" id="CAD" name="fromGroup" value="CAD"><img src = "CAD.png" alt="Canada" width="25" height="15">
  <label for="CAD">Canadian Dollar</label>
<input type="radio" id="USD" name="fromGroup" value="USD"><img src = "US.png" alt="US" width="25" height="15">
  <label for="USD">American Dollar</label>
<input type="radio" id="EUR" name="fromGroup" value="EUR"><img src = "EU.png" alt="EU" width="25" height="15">
  <label for="EUR">Euro</label>
<input type="radio" id="GBP" name="fromGroup" value="GP"><img src = "GB.png" alt="Great Britain" width="25" height="15">
  <label for="GBP">British Pound</label>
  <input type="radio" id="CNY" name="fromGroup" value="CNY"><img src = "CH.png" alt="China" width="25" height="15">
  <label for="CNY">Chinese Yuan</label><br><br>

<h2>Convert to:</h2>
<input type="radio" id="fCAD" name="toGroup" value="CAD"><img src = "CAD.png" alt="Canada" width="25" height="15">
  <label for="CAD">Canadian Dollar</label>
<input type="radio" id="fUSD" name="toGroup" value="USD"><img src = "US.png" alt="US" width="25" height="15">
  <label for="CAD">American Dollar</label>
<input type="radio" id="fEUR" name="toGroup" value="EUR"><img src = "EU.png" alt="EU" width="25" height="15">
  <label for="EUR">Euro</label>
<input type="radio" id="fGBP" name="toGroup" value="GP"><img src = "GB.png" alt="Great Britain" width="25" height="15">
  <label for="GBP">British Pound</label>
  <input type="radio" id="fCNY" name="toGroup" value="CNY"><img src = "CH.png" alt="China" width="25" height="15">
  <label for="CNY">Chinese Yuan</label><br><br>
<input type="submit" value="Convert Now!" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
  $amount = $_POST["input"];

  if(!is_numeric($amount)) {
    echo nl2br("Please enter a valid number.\n");
  }

  if(isset($_POST['fromGroup'])){
    $from = $_POST['fromGroup'];
  } else {
    echo nl2br("Please select a currency to convert from.\n");
  }

  if(isset($_POST['toGroup'])){
    $to = $_POST['toGroup'];
  } else {
    echo nl2br("Please select a currency to convert to.\n");
  }

  if(is_numeric($amount) and isset($from) and isset($to)) {
    output($amount, $from, $to);
  }
}

function output($amount, $from, $to) {
  switch($from) {
    case "CAD":
      $fSymbol = "$";
      $fFlag = "CAD.png";
      switch($to) {
        case "CAD":
          $tSymbol = "$";
          $rate = 1;
          $tFlag = "CAD.png";
          break;
        case "USD":
          $tSymbol = "$";
          $rate = 0.80;
          $tFlag = "US.png";
          break;
        case "EUR":
          $tSymbol = "€";
          $rate = 0.67;
          $tFlag = "EU.png";
          break;
        case "GP":
          $tSymbol = "£";
          $rate = 0.58;
          $tFlag = "GB.png";
          break;
        case "CNY":
          $tSymbol = "¥";
          $rate = 5.22;
          $tFlag = "CH.png";
          break;
      }
      break;
    case "USD":
      $fSymbol = "$";
      $fFlag = "US.png";
      switch($to) {
        case "CAD":
          $tSymbol = "$";
          $rate = 1.25;
          $tFlag = "CAD.png";
          break;
        case "USD":
          $tSymbol = "$";
          $rate = 1;
          $tFlag = "US.png";
          break;
        case "EUR":
          $tSymbol = "€";
          $rate = 0.84;
          $tFlag = "EU.png";
          break;
        case "GP":
          $tSymbol = "£";
          $rate = 0.72;
          $tFlag = "GB.png";
          break;
        case "CNY":
          $tSymbol = "¥";
          $rate = 6.51;
          $tFlag = "CH.png";
          break;
      }
      break;
    case "EUR":
      $fSymbol = "€";
      $fFlag = "EU.png";
      switch($to) {
        case "CAD":
          $tSymbol = "$";
          $rate = 1.49;
          $tFlag = "CAD.png";
          break;
        case "USD":
          $tSymbol = "$";
          $rate = 1.19;
          $tFlag = "US.png";
          break;
        case "EUR":
          $tSymbol = "€";
          $rate = 1;
          $tFlag = "EU.png";
          break;
        case "GP":
          $tSymbol = "£";
          $rate = 0.86;
          $tFlag = "GB.png";
          break;
        case "CNY":
          $tSymbol = "¥";
          $rate = 7.78;
          $tFlag = "CH.png";
          break;
      }
      break;
    case "GP":
      $fSymbol = "£";
      $fFlag = "GB.png";
      switch($to) {
        case "CAD":
          $tSymbol = "$";
          $rate = 1.74;
          $tFlag = "CAD.png";
          break;
        case "USD":
          $tSymbol = "$";
          $rate = 1.39;
          $tFlag = "US.png";
          break;
        case "EUR":
          $tSymbol = "€";
          $rate = 1.65;
          $tFlag = "EU.png";
          break;
        case "GP":
          $tSymbol = "£";
          $rate = 1;
          $tFlag = "GB.png";
          break;
        case "CNY":
          $tSymbol = "¥";
          $rate = 9.06;
          $tFlag = "CH.png";
          break;
      }
      break;
    case "CNY":
      $fSymbol = "¥";
      $fFlag = "CH.png";
      switch($to) {
        case "CAD":
          $tSymbol = "$";
          $rate = 0.19;
          $tFlag = "CAD.png";
          break;
        case "USD":
          $tSymbol = "$";
          $rate = 0.15;
          $tFlag = "US.png";
          break;
        case "EUR":
          $tSymbol = "€";
          $rate = 0.13;
          $tFlag = "EU.png";
          break;
        case "GP":
          $tSymbol = "£";
          $rate = 0.11;
          $tFlag = "GB.png";
          break;
        case "CNY":
          $tSymbol = "¥";
          $rate = 1;
          $tFlag = "CH.png";
          break;
      }
      break;
  }
  $conversion = $amount * $rate;
  $conversion = number_format($conversion, 2);
  $amount = number_format($amount, 2);

  echo "$fSymbol$amount in $from ";
  echo '<img src ="'.$fFlag.'" alt="Canada" width="25" height="15">';
  echo " funds is $tSymbol$conversion in $to  ";
  echo '<img src ="'.$tFlag.'" alt="Canada" width="25" height="15">';
  echo " funds.";
}
?>
</body>
</html>