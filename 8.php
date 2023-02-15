<?php
$c = mysql_connect(
    "jdbc:postgresql://localhost:5432/ktbd",
    "postgres",
    "89685402246bip?");
    if (!$c) {
echo "Невозможно подключиться к базe :". var_dump(OCIError());
die();}
$s = OCIParse($c,
"SELECT object_name, object_type FROM user_objects");
OCIExecute($s, OCI_DEFAULT);
?>
<center><table border=1>
<tr>
<td><center> OBJECT_NAME </center></td>
<td><center> OBJECT_TYPE </center></td>
</tr>
<?php
while (OCIFetch($s)) {
?>
<tr>
<td> <?php echo (ociresult($s, "OBJECT_NAME")); ?> </td>
<td> <?php echo (ociresult($s, "OBJECT_TYPE")); ?> </td>
</tr>
<?php
}
Oci_commit($c);
OCILogoff($c);
?>
