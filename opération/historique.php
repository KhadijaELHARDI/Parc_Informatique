<?php
require_once("connexion_db.php");

$result = mysql_query("select * from operation");
echo "<table border='1'>
<tr>
<th>ancien</th>
<th>nouveau</th>

</tr>";

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['idm'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
;
echo "</tr>";
}
echo "</table>";

print "<h2>CREATE MySQL Trigger In PHP</h2>";
$sql = "CREATE TRIGGER MysqlTrigger BEFORE UPDATE ON materiel FOR EACH ROW SET NEW.no_serie=UPPER(NEW.no_serie);";
mysql_query($sql,$pdo);

print "<h2>MySQL: Update Statement</h2>";
$qry = mysql_query("UPDATE emp SET name =? where id =?");
echo "Table has been updated.";
mysql_query($qry,$pdo);


print "<h2>MySQL: Effect of Trigger</h2>";
$result = mysql_query("select * from materiel");
echo "<table border='1'>
<tr>
<th>no_serie</th>
<th>type</th>

</tr>";
while($row = mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['no_serie'] . "</td>";
echo "<td>" . $row['type'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>