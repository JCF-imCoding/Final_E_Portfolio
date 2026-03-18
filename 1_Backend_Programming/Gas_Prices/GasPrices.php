<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Gas Prices</title>
</head>
<body>
  <?php
    // Will check 1.90 and 3.10 as well
    $GasPrice = 3.10;
    echo '<p>Current gas price: $' . number_format($GasPrice, 2) . '</p>';

    if ($GasPrice >= 2 && $GasPrice <= 3) {
      echo "<p>Gas prices are between \$2.00 and \$3.00.</p>";
    } else {
      echo "<p>Gas prices are not between \$2.00 and \$3.00.</p>";
    }
  ?>
</body>
</html>
