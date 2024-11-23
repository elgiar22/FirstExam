<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
    <?php
    for($r=1;$r<=8;$r++)
    {
     echo "<tr>";

     for($c=1;$c<=8;$c++)
    {
        if(($r+$c)%2==0)
        {
            echo "<td class='black'></td>";
        }else{
            echo "<td></td>";
        }
    }
     echo"<tr>";
    }
    

    ?>
    </table>
</body>
</html>











