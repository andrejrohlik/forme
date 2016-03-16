<?php require('db.php'); ?>
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
<?php

if($result = $conn->query("SELECT * FROM students")){
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
}

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
<a href="index.php">Povratni unos!</a>
</body>
</html>
