<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php
            class Book {
                var $author;
                var $title;
                var $pages;
            }

            $book1 = new Book;
            $book1->title = "Harry Potter";
            $book1->author = "JK Rowling";
            $book1->pages = 300;

            $book2 = new Book;
            $book2->title = "Lord of the ring";
            $book2->author = "Tolkien";
            $book2->pages = 500;


            echo $book1->author;
            echo "<br>";
            echo $book1->title;
            echo "<br>";
            echo $book1->pages;
            echo "<br>";
            
            echo "<br>";
            echo "<hr>";
            echo "<br>";

            echo $book2->author;
            echo "<br>";
            echo $book2->title;
            echo "<br>";
            echo $book2->pages;

        
        ?>
    </body>
</html>