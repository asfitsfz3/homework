<pre>

<?php
echo "<table border='3'>";
for ($i=1; $i<=10; $i++) {
    echo "<tr>";
    for ($j=1; $j<=10; $j++) {
        echo "<td align='center'>";
        if (($i%2==0) and ($j%2==0)) {
            echo $i." * ".$j." = (".$i*$j.")";
        } elseif (($i%2!=0) and ($j%2!=0)) {
            echo $i." * ".$j." = [".$i*$j."]";
        } else {
            echo $i." * ".$j." = ".$i*$j;
        }

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
