The solution is to use the strict comparison operator `===`, which checks for both value and type equality.  Here's the corrected code:

```php
<?php
$a = '10';
$b = 10;

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
?>
```

This will correctly print "Not equal", as the types are different.  Always use strict comparison (`===`) when the types involved matter to prevent unexpected behavior stemming from PHP's implicit type conversions.