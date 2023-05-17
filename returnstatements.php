<html>
    <head>
        <title></title>
    </head>
    <body>
    
        <?php
           function cube($num){
                echo "Hello";
                echo "<br>";
            //return function will healp the code to break out of the scoop
                return $num * $num * $num;

           } 

           $cubeResult = cube(5);
           echo $cubeResult;
        ?>

    </body>
</html>