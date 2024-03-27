<!-- 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <?php
            $tablica = [];
            for ($i = 2; $i <= 100; $i += 2) {
                $tablica[$i] = rand(); 
            }

            $wyniki = [];

            $licznik = 0;
            foreach ($tablica as $wartosc) {
                if ($licznik % 2 == 0) {
                    $wyniki[] = $wartosc; 
                }
                $licznik++;
            }

            foreach ($wyniki as $element) {
                echo "<td>" . $element . ", </td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
