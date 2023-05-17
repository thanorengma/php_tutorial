<html>
    <head>
        <title></title>
    </head>
    <body>
        

        <?php
            // $index = 1;
            // while($index <=5){
            //     echo "$index <br>";
            //     $index++;
            // }
            
            //example 1
            // for($i = 1; $i <= 5; $i++){
            // echo "$i <br>";
            // }

            //example 2
            $luckyNumbers = array(4, 8, 14, 16, 22, 42);

            for($i = 0; $i <= count($luckyNumbers); $i++){
                echo "$luckyNumbers[$i]<br>";
            }


        ?>
    </body>
</html>