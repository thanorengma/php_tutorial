<html>
    <head>
        <title></title>
    </head>
    <body>
        




        <?php
            $isMale = false;
            $isTall = true;
            if ($isMale && $isTall)
            //if ($isMale || $isTall)
            {
                echo "You are a tall male ";
            }
            elseif ($isMale && !$isTall){
                echo " you are male and not tall";
            }
            elseif(!$isMale && $isTall){
                echo "you are not male but are tall.";
            } 
            else{
                echo "you are not male and not tall";
            }

        ?>
    </body>
</html>