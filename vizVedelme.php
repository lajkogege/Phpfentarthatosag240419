<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Víz védelme</title>
    <link rel="stylesheet" href="stilus1.css">
</head>

<body>
    <form action="vizBackend.php" method="post">
        <label for="v">A folyadékáram sebessége: </label>
        <input type="number" name="sebbeseg" id="v">

        <label for="A">A folyadékáram keresztmetszette (m2): </label>
        <input type="number" name="keresztMetszette" id="A">
        <input type="submit" value="Számol" name="szamol">
    </form>
</body>

</html>