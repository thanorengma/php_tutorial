<html>
<body>

<form action="url.php" method = "get">
Name: <input type ="text" name="name"> <br>
<input type = "submit">
</form>
<br> <br>

<?php 
    echo $_GET["name"];
?>
</body>
</html>