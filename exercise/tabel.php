<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <th>
        <!-- <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr> -->

        <?php
        for ($i=1; $i <=3; $i++) {
            echo "<tr>";
            for($j=1; $j <=5; $j++){
                echo "<td>$i,$j";
            }
            echo "</tr>";
        }
        ?>
        </th>
    </table> 
</body>
</html>
</html>