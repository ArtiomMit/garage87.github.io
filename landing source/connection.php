$host = "localhost"; // адрес сервера 
$user = "root"; // имя пользователя
$password = ""; // пароль
$database = "garage_87"; // имя базы данных
$dbtable = "comments"; //имя таблицы

$db_link = mysql_connect($host, $user, $password);
$sel = mysql_select_db($database, $db_link);
if (!$db_link) { 
   die("Ошибка подключения: " .mysql_error());
}