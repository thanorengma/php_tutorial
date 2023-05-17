<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>
        <?php

            $characterName1 = "mango";
            $mangoPrice = 50;
            $characterName2 = "apple";
            $applePrice =200;

            echo("<h1>This is a topic on VARIABLES</h1>");
            echo "<hr>";
            echo("Hello world");
            echo"<h2>This is Thano</h2>";
            
            echo"<p> This is a paragraph<p>";

            echo"<h2> this is a variable</h2>";
            echo"$characterName1 is $mangoPrice rupees <br>";
            echo"$characterName2 is $applePrice rupees <br>";

            echo"<hr>";
            echo"<hr>";

            echo"<p3><h1> This is a data types<h1></p3>";
            echo"<h2>This is a STRING datatypes</h2>";

            //string is a plain text, it has to be kept inside a double quotation marks.
            $phrase = "To be or not to be";
            //There are two different types of numbers in php, a whole number and a decimal number
            //interger is a whole number(1,2,3,4,5... a number without a decimal point)
            $age = 33; //integer number (whole number)
            $gpa = 24.44; //decimal number or a floating point number
            $isMale = true; // Bolean datatypes(it has two value true or false)
            $hello = null; //void value or no value.
            
            echo"hello $age is my age <br>"; 
            echo"And my GPA is $gpa <br>";
            echo"My gender is $isMale";

            echo"<hr>";
            echo"<hr>";

            echo("<h1> This topic is WORKING WITH STRINGS</h1>");
            //using variables to print a string
            $phrase = "This is a string manipulation using variables";
            echo"$phrase";
            echo"<hr>";
            echo"String functions";
            echo "using strtoupper and strtolower function to convert a string to upper and lower case <br>";
            echo strtoupper("$phrase <br>");
            echo strtolower("$phrase <br>");

            echo ("This function STRLEN is used to calculate the length tof the string <br>");
            echo strlen("$phrase <br>");
            echo("Using an index number in the [4] square brackets to find the alphabeth of that index character <br>");
            echo $phrase [3];
            echo "<br>";
            $phrase [0] = "Z"; //replacing the 0 index with the alphabeth Z.
            echo $phrase;
            echo "<br>";
            // replace a wor with another word using the str_replace function.
            echo str_replace("is", "was",$phrase); 
            echo "<br>";
            echo str_replace("string", "master string", $phrase);
            echo "<br>";
            echo "Using a substr function to grabe parts of the string to echo.(index, index no.,number of characters to grab) <br>";
            echo substr($phrase, 7, 5);
            echo"<hr>";
            echo"<hr>";
            echo ("<h1>WORKING WITH NUMBERS</h1>");
            echo 33;// it can print a number directly
            echo "<br>";
            echo 6+5;//this will print the answer.It does all the calculation using the operator.
            echo "<br>";
            echo "using variables to print a number <br>";
            $num1 = 10;
            $num2 = 20;
            $num3= $num1+$num2;
            $num2++;
            echo ("This is num1: $num1 <br>");
            echo ("This is an addition of num1 and num2 stored in num3:$num3 <br>");
            echo ("This is an increment of num2 using num2++:$num2 <br>");//$num +=num20 will give the same result.

            echo ("<h3>Number functions<h3><br>");
            echo ("This is an absolute function abs: abs(-100) <br>");
            echo abs(-100);
            echo "<br>";
            echo ("This is a power function pow():power of 2 base to the power 4 <br>");
            echo pow(2, 4);
            echo "<br>";
            echo ("This is a square root function sqrt: square root of 25 <br>");
            echo sqrt(25);
            echo "<br>";
            echo ("This is a max function to find the bigger number betweeen 2 and 4 <br>");
            echo max(2, 4);
            echo "<br>";
            echo ("This is a rounding off a number function: Round off of 44.89 is <br>");
            echo round(44.89);
            echo "<br>";
            echo ("This is a ceiling function: Celing(maximum) of 3.5 <br>");
            echo ceil(3.5);
            echo "<br>";
            echo ("This is a flooring function, which will decerement it down to a decima;l point.Floor of 6.99 <br>");
            echo floor(6.99);
            echo "<br>";
            echo "<hr>";
            echo ("<h1>GETTING USER INPUT</h1> <br>");

            
            
        ?>
        
        
    </body>
</html>