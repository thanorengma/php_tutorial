<html>
    <head>
        <title>

        </title>
    </head>
    <body>

        <form action="switch.php" method = "post">
            What was your grade?
            <input type="text" name = "grade">
            <input type="submit">
        </form>
        
        <?php
            $grade = $_POST["grade"];
           // echo $grade;

            switch($grade){
                case "A":
                    echo "You did amazing";
                    break;
                case "B":
                    echo "you did pretty well";
                    break;
                case "C":
                    echo "you did good";
                    break;
                case "D":
                    echo "You passed under consideration";
                    break;
                case "F":
                    echo "You failed bro";
                    break;
                default:
                    echo"Invalid Grade Bhai!";

            }
        ?>

    </body>
</html>