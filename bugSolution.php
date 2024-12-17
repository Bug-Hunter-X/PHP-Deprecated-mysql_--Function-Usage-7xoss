The solution is to use either the MySQLi extension or the PDO extension to interact with the MySQL database. Here's an example using MySQLi:

```php
<?php
$link = new mysqli('localhost', 'user', 'password', 'databaseName');
if ($link->connect_error) {
die('Connect Error: ' . $link->connect_error);
}
// ... other mysqli functions
$link->close();
?>
```

Remember to install the MySQLi extension if it's not already enabled on your server.