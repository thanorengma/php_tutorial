<html>
    <head>
        <title></title>
    </head>
    <body>
        
           
            <form action="form.php" method="GET">
                    Name: <input type="text" name="username">
                    <input type="submit"> 
                    <br>
                    Age: <input type="number" name="age">

            </form>
            
            <br>
            your name is:  <?php echo $_GET["username"] ?>
            <br>
            your age is: <?php echo $_GET["age"] ?>


    </body>
</html>