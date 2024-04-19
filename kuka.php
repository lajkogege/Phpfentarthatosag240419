<?php
    include_once "backend.php"
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szelektív hulladékgyűjtés</title>
    <link rel="stylesheet" href="stilus1.css">
</head>

<body>
    <?php
    $szemet = array("papír", "bab konzerv", "tejes doboz", "sörös üveg", "nylon csomagolás", "krumpli héja");
    ?>
    <form action="backend.php" method="post">
        <label for="szemetem">Kidobandó szemét</label>
        <select name="szemetem" id="szemetem">
            <?php
            foreach ($szemet as $ertek) {
                echo "<option value='$ertek'>$ertek</option>";
            }
            ?>
        </select>
        <br>
        <input type="image" src="forras/kuka.jpg" alt="kuka" name="kuka">
    </form>
    <?php
        //var_dump(($_POST))
        if (isset($_POST["szemetem"])) {
            $kivSzemet=$_POST["szemetem"];
            if ($kivSzemet=="papír" || $kivSzemet == "tejes doboz"){
                echo "Kék színű gyüjtő";
            }
            elseif($kivSzemet=="bab konzerv" || $kivSzemet== "nylon csomagolás"){
                echo "Sárga gyűjtő";
            }
            else echo "Nem színes kuka";
        }
       ?>
</body>

</html>