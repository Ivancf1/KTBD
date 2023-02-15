<head><meta charset="utf-8"></head>
<?php
if (!(empty($_POST["tine"]))) {
    if ($_POST["time"] == "Утро") {
            echo("Вы выбрали диапазон времени с б до 12 часов");
            }
        }
        elseif ($_POST["time"] == "День") {
            echo("Вы выбрали диапазон времени с 12 до 18 часов");
            }
        elseif ($_POST["time"] == "Вечер") {
            echo("Вы выбрали диапазон времени с 18 до 24 часов");
            }
        elseif ($_POST["time"] == "Ночь") {
            echo("Вы выбрали диапазон времени с @ до 6 часов");
            }
    else {
        echo ("Error");
        echo("<br><br>");
        }
?>
<form action="task1.php" method="post">
<select name="time">
<option selected disabled>Выберите время суток:</option>
<option value="Утро">Утро</option>
<option value="День">День</option>
<option value="Вечер">Вечер</option>
<option value="Ночь">Ночь</option>
</select>
<p><input type="submit" value="Отправить"></p>
</for>