<!DOCTYPE html>
<html>
    <body>
        <form action="get.php" method ="get">
            password: <input type="password" name="password"><br>
            <input type="submit">

        </form>
        <br><br>

        <?php
            echo $_GET["password"];
        
        ?>

    </body>
</html>