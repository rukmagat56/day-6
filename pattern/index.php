
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
    <h1>Chess Board</h2>
    <table border="1">
    <?php
    for($row=1;$row<=7;$row++){
       
        for($col=1;$col<=5;$col++){
           if( $row==1 && $col==1 || $row==1 && $col==5 || $row==2 && $col>1 && $col<5 || $row==3 && $col>1 || $row==4 && $col==2 || $row==5 && $col>1 && $col<5 || $row==6 && $col>1 && $col<5 ||$row==7 && $col==1 || $row==7 && $col==5  ){
            echo "&nbsp &nbsp ";
           }else {
            echo "*";
           }

        }
        
         echo '<br>';
       echo '</tr>';
    }
    
    ?>
    </table>
    
    </div>
</body>
</html>