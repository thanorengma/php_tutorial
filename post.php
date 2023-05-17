<!DOCTYPE html>
<html>
    <body>
        <form action="get.php" method = "post">
            password: <input type="password" name="password"><br>
            <input type="submit">

        </form>
        <br><br>

        <?php
            echo $_POST["password"];
        
        ?>

    </body>
</html>