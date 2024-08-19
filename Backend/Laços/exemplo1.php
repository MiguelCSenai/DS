<?php
echo "<b>For:</b><br><br>";
for ($i=1; $i<=5; $i++) { 
    echo "Número: " . $i . "<br>";
}

$i = 1;
echo "<br><br><b>While:</b><br><br>";
while ($i <= 5) {
    echo "legal<br>";
    $i++;
}

$j = 10;
echo "<br><br><b>Do While:</b><br><br>";
do {
    
    echo $j . "<br>";

} while ($j <= 5);

?>

<table border="1">

    <tr>

        <th>id</th><th>Frutas</th>

    </tr>

    <?php
    
    echo "<br><br><b>For each:</b><br><br>";

    $frutas = array("maçã", "banana", "laranja");
    foreach ($frutas as $id => $fruta) {
        echo "
        
        <tr>
        
            <td>$id</td><td>$fruta</td>
        
        </tr>
        
        ";
    }
    
    ?>

</table>