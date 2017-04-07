<?php
mysql_connect("localhost", "database_user", "database_password") or
    die("Could not connect: " . mysql_error());
mysql_select_db("database_name");

$result = mysql_query("SELECT * FROM table");

echo "<table>n";
$records = array();
 while(($row = mysql_fetch_assoc($result))) {
 $records[]=$row;
 }
 
    foreach($records as $key => $row) {
       foreach($row as $field => $value) { 
           $recNew[$field][] = $value;
       }
 }
 foreach ($recNew as $key => $values)
 {
     echo "<tr>n";
     echo "t<td>" . $key . "</td>n";
         foreach ($values as $cell)
         {
            echo "t<td>" . $cell . "</td>n";
         }
     echo "</tr>n"; // end row
 }
echo "</table>";

?>
