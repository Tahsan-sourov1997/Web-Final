<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nested loop</title>
</head>
<body>
    <?php
    for($i=0;$i<=5;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br/>";
       
    }
    ?>
    
</body>
</html>