<html>
    <head><title></title></head>
    <body>
        

        <form action="madlibs.php" method="get">
        color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="PluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
        </form>
        <br>

        <?php
        $color = $_GET["color"];
        $PluralNoun = $_GET["PluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color. <br>";
        echo "$PluralNoun are blue <br>"; 
        echo "I love $celebrity <br>";
        ?>
    </body>
</html>