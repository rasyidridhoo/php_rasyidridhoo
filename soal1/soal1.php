<html>
    <head>
        <title>Soal 1</title>
    </head>
    <body>
    <?php

    // if (isset($_GET['jml'])) {
    //     $jml = $_GET['jml'];
    //     echo "<table border='1'>\n";

    //     for ($a = $jml; $a > 0; $a--) {
    //         echo "<tr>\n";

    //         for ($b = $a; $b > 0; $b--) {
    //             if ($b === 1 && $a !== $jml) {
    //                 echo "<td>$b</td>";
    //             } else {
    //                 echo "<td>$b</td>";
    //             }
    //         }

    //         if ($a !== $jml) {
    //             echo "<td colspan='".($jml - $a+ 1)."'>&nbsp;</td>";
    //         }
            
            
    //         echo "</tr>\n";
    //     }

    //     echo "</table>";
    // } else {
    //     echo "Parameter 'jml' tidak ditemukan.";
    // }

    if (isset($_GET['jml'])) {
        $jml = $_GET['jml'];
        echo "<table border='1'>\n";

        for ($a = $jml; $a > 0; $a--) {
            $total = 0; 
            for ($b = $a; $b > 0; $b--) {
                $total += $b;
            }

            echo "<tr><td colspan='$jml'>TOTAL: $total</td></tr>\n"; 

            echo "<tr>\n";
            for ($b = $a; $b > 0; $b--) {
                if ($b === 1 && $a !== $jml) {
                    echo "<td>$b</td>";
                } else {
                    echo "<td>$b</td>";
                }
            }

            if ($a !== $jml) {
                echo "<td colspan='" . ($jml - $a + 1) . "'>&nbsp;</td>";
            }

            echo "</tr>\n";
        }

        echo "</table>";
    } else {
        echo "Parameter 'jml' tidak ditemukan.";
    }

    ?>
   
    </body>
</html>