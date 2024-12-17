This code uses the `mysql_*` functions, which are deprecated and have been removed in PHP 7.0 and later.  Attempting to use them will result in an error. 
```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('databaseName', $link);
// ... other mysql functions
mysql_close($link);
?>
```