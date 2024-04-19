<!DOCTYPE html>
<html lang="hu-HU">
    <head>
        <meta charset="UTF-8">
        <title>Főoldal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stilus1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php
	// Egy soros megjegyzés
	/* Több
	  soros
	  megjegyzés */

	//szöveges változók létrehozása 1. feladat
	$elsoSzint = "Ökoszisztéma";
	$masodikSzint = "Társadalom";
	$harmadikSzint = "Gazdagság";
	$negyedikSzint = "Pénz";
	?>
	<div id="tartalom">
	    <div id="bal">
			<?php
			print("<img src='forras/fenntart.png' alt='Fenntarthatóság szintjei'/>");
			?>
	    </div>
	    <div id="jobb">
			<h1>A fenntarthatóság szintjei</h1>
			<ul>
				<?php
				//változók használata
				echo "<li>$elsoSzint</li>";
				echo '<li>' . $masodikSzint . '</li>';
				echo "<li>$harmadikSzint</li>";
				echo "<li>$negyedikSzint</li>";
				?>
			</ul>
	    </div>
	</div>
	    <?php
		//második feladat
	    $eroforras=array("A megújuló erőforrások fogyasztása", "több, mint amit a természet újratermelni képes", "a természet újratermelő kapacitásával azonos mértékű", "kevesebb, mint amit a természet újratermelni képes");
	    $kHelyzet[0]="A környezet helyzete";
		$kHelyzet[1]= "a környezet pusztul";
	    $kHelyzet[2]="környezeti egyensúly";
	    $kHelyzet[3]="a környezet megújul";
	    
	    $fenntarthatosag=array("Fenntarthatóság");
	    array_push($fenntarthatosag, "nem fenntartható");
	    array_push($fenntarthatosag, "fenntartható, nem változó állapot");
	    array_push($fenntarthatosag, "fenntartható fejlődés");
	    
	    echo "<p><b>$eroforras[0] - $kHelyzet[0] -	$kHelyzet[0]</b><p>";
	    for ($index = 1; $index < count($eroforras); $index++) 
		{
			echo "<p>$eroforras[$index] - $kHelyzet[$index] - $fenntarthatosag[$index]<p>";
	    }
		echo "<table>";
		echo "<tr>";
		echo "<th>$eroforras[0]</th><th>$kHelyzet[0]</th><th>$fenntarthatosag[0]</th>";
		echo "</tr>";
		for ($index = 1; $index < count($eroforras); $index++) 
		{
			echo "<tr>";
			echo "<td>$eroforras[$index]</td><td>$kHelyzet[$index]</td><td>$fenntarthatosag[$index]</td>";
			echo "</tr>";
	    }
		echo "</table>";
	    ?>
		<a href="/forras/kuka.jpg"></a>
    </body>
</html>
