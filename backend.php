<?php
//var_dump(($_POST))
if (isset($_POST["szemetem"])) {
    $kivSzemet = $_POST["szemetem"];
    if ($kivSzemet == "papír" || $kivSzemet == "tejes doboz") {
        echo "Kék színű gyüjtő";
    } elseif ($kivSzemet == "bab konzerv" || $kivSzemet == "nylon csomagolás") {
        echo "Sárga gyűjtő";
    } else
        echo "Nem színes kuka";
}
?>