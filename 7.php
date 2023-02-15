<?php
if ($c = mysql_connect(
    "jdbc:postgresql://localhost:5432/ktbd",
    "postgres",
    "89685402246bip?"))
{
echo "Successfully connected to local DB Postgres.\n";
OCILogoff($c);
}
else {
    $err = OCIError();
    echo "Postgres Connect Error ". $err[text];
}
?>