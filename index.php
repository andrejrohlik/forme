<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <p class="musko">
    <input type="radio" name="spol" value="M">Muško<br>
    </p>
    <p class="zensko">
    <input type="radio" name="spol" value="Ž">Žensko<br>
    </p>
    <input type="submit" value="Pošalji!">
</form>

<?php

echo('Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '<br>');
echo('Vaše prezime je: ' . htmlspecialchars($_POST['prezime']) . '<br>');
echo('Vaš spol je: ' . htmlspecialchars($_POST['spol']). '<br>');

if ($_POST['spol'] == 'M')
{
    echo('<p class="musko">' . 'Vi ste pravi muškarac!' . '</p>');
}

elseif ($_POST['spol'] == 'Ž')
{
    echo('<p class="zensko">' . 'Vi ste prava žena!' . '</p>');
}
else
{
    echo('A što ste onda!?');
}

?>

</p>

</body>
</html>
