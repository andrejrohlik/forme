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
<form method="post" action="rezultat.php">
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
</p>

</body>
</html>
