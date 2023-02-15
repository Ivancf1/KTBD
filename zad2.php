<?php
$c = mysql_connect(
    "jdbc:postgresql://localhost:5432/ktbd",
    "postgres",
    "89685402246bip?");
if (!$c) {
    echo "Невозможно подключиться к базе :". var_dump(OCIError());
    die();
}
$s = OCIParse($c, "SELECT ROUND(sin(3.14),5), ROUND(cos(2 * 3.14),7), ROUND(ln(2),10) FROM dual");
OCIExecute($s, OCI_DEFAULT);
while (OCIFetch($s)) {
    echo ("sin (3.14) = 0". ociresult($s, "ROUND(SIN(3.14),5)"). "<br>");
    echo ("cos (3.14) = 0". ociresult($s, "ROUND(COS(2*3.14),7)"). "<br>");
echo ("ln (2) = 0". ociresult($s, "ROUND(LN(2),10)"). "<br>");
}
?>
    </table>
    </center>
<?php
Oci_commit($c);
OCILogoff($c);