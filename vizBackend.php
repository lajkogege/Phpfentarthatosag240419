<?php
    if (isset($_POST['szamol'])) {
        $v = $_POST['sebbeseg'];
        $A = $_POST['keresztMetszette'];
        $w=$A*$v;
        echo"<p>Az adott keresztmetszetben áramló folyadék térfogata: $w m<sup>3</sup>.</p>";
    }
?>