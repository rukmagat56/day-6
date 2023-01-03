
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chess_board">
    <h1>Table Board</h2>
    <table >
    <?php
    for($row=1;$row<=10;$row++){
        echo '<tr>';
        for($col=1;$col<=10;$col++){
            echo '<td>'
            . ($row * $col).
             '</td>';
        }
        // echo '<br>';
       echo '</tr>';
    }
    
    ?>
    </table>
    
    </div>
</body>
</html>