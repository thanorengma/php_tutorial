<html>
    <head><title></title></head>
    <body>
        
        <?php
            class Book {
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages =$aPages;
                }
            }

            $book1 = new Book("Harry Potter","Jk Rowling",700);
            $book2 = new Book("The Lord Of The Ring", "Tolkien", 900);
            
            echo $book1->title;
            echo "<br>";
            echo $book2->title;
            echo "<br>";
            echo $book1->author;
            
        
        ?>

    </body>
</html>