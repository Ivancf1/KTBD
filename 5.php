<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo('Mой любимый предмет: <i>' . $_POST['kurs'] . '</i><br>');
    $favorite_times = count($times);
    if ($favorite_times <= 1) {
        $times_message = "не ботан";
    } elseif ($favorite_times > 1 && $favorite_times < 4) {
        $times_message = " ботаю иногда";
    } else
        $times_message = 'ботан';
    echo('я <i>' . $times_message . '</i><br>');
}
?>
<FORM TARGET="04.php" METHOD="POST">
    любимый предмет: <br>
        <INPUT TYPE=RADIO NAME="kurs" VALUE="KтБД">конструкторско-технологические базы данных<br>
        <INPUT TYPE=RADIO NAME="kurs" VALUE="CФM">Системы функционального моделирования<br>
        <INPUT TYPE=RADIO NAME="kurs" VALUE="СИИ">Системы искусственного интеллекта<br>
    Когда Вы предпочитаете его изучать:<br>
        <INPUT TYPE=CHECKBOX NAME="times[]" VALUE="m">за завтраком
        <INPUT TYPE=CHECKBOX NAME="times[]" VALUE="n">В обед
        <INPUT TYPE=CHECKBOX NAME="times[]" VALUE="d">За ужином
        <INPUT TYPE=CHECKBOX NAME="times []" VALUE="1">Поздно ночью
    <P>
        <INPUT TYPE=HIDDEN NAME="stage" VALUE="results">
        <INPUT TYPE=SUBMIT VALUE="Всегда!">
</FORM>
