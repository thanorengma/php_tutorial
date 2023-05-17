<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="asscoArray.php" method="post">
            <input type="text" name="student">
            <input type="submit">

        </form>

        <?php
          $grades = array ("Jim"=>"A+", "Pam"=>"B+", "Oscar"=>"C+");
          echo $grades [$_POST["student"]];

        ?>

    </body>
</html>