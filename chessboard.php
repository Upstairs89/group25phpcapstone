
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<body>
<table width="300px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
        for($row = 1; $row <= 8; $row++ ) // loop from 1 to 8
        {   
            echo "<tr>";
            for($col = 1; $col <= 8; $col++ ) // loop from 1 to 8
            {
               $field = $row + $col; // add row and col and then iterate

            if ($field % 2 == 0) // evaluate where field is even. (i.e 1+1 = 2/2 = 0)
             {
             echo "<td height=30px width=30px bgcolor=white></td>";
             }
            else
            {
             echo "<td height=30px width=30px bgcolor=black></td>";
            }
         }
        }
    ?>
</table>
</body>
</html>
