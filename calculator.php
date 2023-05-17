<html>
    <head><title></title></head>
    <body>
        <h1>This is a basic calculator.</h1>    
        <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>

        <input type="submit">
        </form>

        Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    </body>
</html>