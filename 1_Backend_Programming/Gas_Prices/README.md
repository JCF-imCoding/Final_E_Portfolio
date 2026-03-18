# Gas Prices – Compound Conditional 

**Topic:** Control Structures → Compound Conditionals (`&&`, `||`)  
**Concepts practiced:** `if` / `else`, logical operators, range checks, output formatting with `number_format()`

## 📘 Overview
This exercise converts a **nested `if`** structure into a **compound conditional** using logical operators. The script checks whether the current gas price is **between $2.00 and $3.00**, inclusive, and prints a message accordingly.

## 🧠 What I Practiced / Learned
- Using **compound conditions** with logical AND `&&` (both conditions must be true).
- Performing **range checks** with `>=` and `<=`.
- Outputting clean currency with `number_format($value, 2)`.
- Embedding PHP inside a basic XHTML/HTML page.

## 🗂️ Files
- `GasPrices.php` — main script that displays the current gas price and evaluates the condition.

## 🧩 Core Logic (Compound Conditional)
```php
if ($GasPrice >= 2 && $GasPrice <= 3) {
    echo "<p>Gas prices are between \$2.00 and \$3.00.</p>";
} else {
    echo "<p>Gas prices are not between \$2.00 and \$3.00.</p>";
}
