<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="checkbox.php" method="post">
            Apples:<input type="checkbox" name="fruits[]" value="apples"> <br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears">

            <input type="submit">

        </form>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
            echo $fruits[1];
            echo $fruits[2];

        ?>
    </body>
</html>