

<pre>
<?php
    $wys = 16;

    for ($i = 1; $i <= $wys; $i++) {
        for ($j = 1; $j <= $wys - $i; $j++) {
            echo " ";
        }
        if ($j % 2 == 0) {
            for ($j = 1; $j <= 2 * $i - 1; $j++) {
                echo '<span style ="color:green">*</span>';
            }
        } else {
            for ($j = 1; $j <= 2 * $i - 1; $j++) {
                echo '*';
            }
        }
        echo "<br>";
    }
?>
</pre>