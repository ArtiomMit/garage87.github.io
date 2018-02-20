$host = "localhost";
$user = "root";
$pass = "";
$db = "garage-87";
$db_table = "comments";
	
$connect = mysql_connect($host, $user, $pass);
if ($connect) echo "Подключено";
else echo "Нет";
end if;

$sel = mysql_select_db($db,$connect);
if ($sel) echo "Подсоединено";
else echo "нет";
end if;