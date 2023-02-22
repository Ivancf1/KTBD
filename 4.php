<?php
echo ("<P>");
echo $_GET["name"];
echo ("<P>");
echo $_GET["email"];
?>
<P>
<form action=3.php method="get">
    Name:
    <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>
