<html>
    <head>
        <title></title>
    </head>
    <body>
        
    <?php

        // echo max(3,6);
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }
            elseif ($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            }
            else {
                return $num3;
            }
        }
        echo getMax(300, 900, 500);
    ?>

    </body>
</html>